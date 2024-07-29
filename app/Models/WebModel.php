<?php namespace App\Models;

use CodeIgniter\Model;

class WebModel extends Model
{
    protected $DBGroup = 'default'; // Ensure this matches your database configuration
    protected $table = 'country'; // Define the table name if applicable

    public function getCountry($visa = null, $id = null)
    {
        $db = \Config\Database::connect(); // Get the database connection

        if ($visa) {
            $builder = $db->table('country c')
                ->select('*, c.id as cid')
                ->join('visa_summary vs', 'vs.vs_country=c.id', 'inner')
                ->join('category cat', 'cat.id=vs.vs_category', 'inner')
                ->groupBy('vs_country')
                ->having('active', 1);
        } elseif ($id) {
            $builder = $db->table('country c')
                ->select('country')
                ->where('id', $id);
        } else {
            $builder = $db->table('country');
        }

        return $builder->get()->getResult();
    }

    public function getCountryList()
    {
        $db = \Config\Database::connect(); // Get the database connection

        $builder = $db->table('country c')
            ->select('*, c.id as cid')
            ->join('country_info ci', 'ci.ci_c_id=c.id', 'inner')
            ->join('(select vc_country vc_ref_country, vc_category vc_ref_category from visa_checklist group by vc_country) vc_ref', 'vc_ref.vc_ref_country=c.id', 'inner')
            ->join('(select * from visa_checklist group by vc_country, vc_category) vc', 'vc.vc_category=vc_ref.vc_ref_category', 'inner')
            ->join('category cat', 'cat.id=vc.vc_category', 'inner')
            ->join('visa_summary vs', 'vs.vs_country=c.id', 'inner')
            ->groupBy('vs_country')
            ->having('active', 1)
            ->orderBy('country', 'asc');

        return $builder->get()->getResult();
    }

    public function getCountryListb()
    {
        $db = \Config\Database::connect(); // Get the database connection

        $builder = $db->table('country c')
            ->select('*, c.id as cid')
            ->join('country_info ci', 'ci.ci_c_id=c.id', 'inner')
            ->join('visa_summary vs', 'vs.vs_country=c.id', 'inner')
            ->join('category cat', 'cat.id=vs.vs_category', 'inner')
            ->join('(select * from visa_checklist group by vc_country, vc_category) vc', 'vc.vc_category=cat.id', 'inner')
            ->groupBy('vs_country')
            ->having('active', 1)
            ->orderBy('country', 'asc');

        return $builder->get()->getResult();
    }

    public function get_branch_name($bid)
    {
        $db = \Config\Database::connect(); // Get the database connection

        $builder = $db->table('branch')
            ->select('branch')
            ->where('id', $bid);

        return $builder->get()->getRow('branch');
    }

    public function get_cat($cid)
    {
        $db = \Config\Database::connect(); // Get the database connection

        $builder = $db->table('category c')
            ->select('id, category')
            ->where('status', 1);

        if ($cid) {
            $builder->join('visa_checklist vc', 'vc.vc_category = c.id', 'inner')
                ->join('visa_summary vs', 'vs.vs_category = c.id', 'inner')
                ->where('vc_country', $cid);
        }

        $builder->groupBy('vc_category');

        return $builder->get()->getResult();
    }

    public function getCategory()
    {
        $db = \Config\Database::connect(); // Get the database connection

        $builder = $db->table('category')
            ->where('status', 1);

        return $builder->get()->getResult();
    }

    public function get_files($cat, $con, $vtype = null)
    {
        $db = \Config\Database::connect(); // Get the database connection

        $query = "SELECT vf_id, vf_country, vf_category, vf_name, vf_label, vf_reference
                  FROM visa_forms vf
                  INNER JOIN (SELECT * FROM category WHERE id = '$cat') c 
                  ON vf.vf_category = c.category
                  WHERE vf_country = '$con'
                  UNION
                  SELECT * FROM visa_forms WHERE vf_country = '$con' AND vf_category = 'general'";

        return $db->query($query)->getResult();
    }

    public function visa_info($con)
    {
        $db = \Config\Database::connect(); // Get the database connection

        $builder = $db->table('visa_checklist vc')
            ->select('*')
            ->join('vc_header_master vhs', 'vc.vc_header=vhs.vhm_header', 'left')
            ->where($con)
            ->orderBy('vhm_order, vc_id');

        return $builder->get()->getResult();
    }

    public function visa_summary($con)
    {
        $db = \Config\Database::connect(); // Get the database connection

        $builder = $db->table('country_info ci')
            ->join('country', 'ci.ci_c_id = country.id', 'inner')
            ->join('visa_summary vs', 'ci.ci_c_id = country.id', 'left')
            ->join('category', 'vs.vs_category = category.id', 'left')
            ->where($con)
            ->where('country.id', $con['vs_country']);

        return $builder->get()->getResult();
    }

    public function get_vs_type($cid)
    {
        $db = \Config\Database::connect(); // Get the database connection

        $builder = $db->table('visa_summary')
            ->select('vs_type')
            ->where('vs_country', $cid)
            ->groupBy('vs_type');

        return $builder->get()->getResult();
    }

    public function get_visa_fees($cat, $con, $vtype = null)
    {
        $db = \Config\Database::connect(); // Get the database connection

        $builder = $db->table('visa_summary')
            ->where('vs_country', $con)
            ->where('vs_category', $cat);

        if ($vtype) {
            $builder->where('vs_type', $vtype);
        }

        return $builder->get()->getResult();
    }

    public function country_summary($id)
    {
        $db = \Config\Database::connect(); // Get the database connection

        $builder = $db->table('country')
            ->join('country_info ci', 'ci.ci_c_id = country.id', 'inner')
            ->where('id', $id);

        return $builder->get()->getResult();
    }

    public function request_info($data)
    {
        $db = \Config\Database::connect(); // Get the database connection

        $builder = $db->table('applicant')
            ->select('name, passportno, visaref, appt_status')
            ->where($data);

        return $builder->get()->getResult();
    }
}
