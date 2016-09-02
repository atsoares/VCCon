<?php
/**
 * Created by PhpStorm.
 * User: T200267
 * Date: 08/08/2016
 * Time: 10:44
 */

namespace Sgpweb\Domains\Pessoas\Repositories;


class teste
{
    public function rpt_purchases_search_results(Requests\PatrimonialPurchaseSearchRequest $request)
    {
        $input = $request->all();

        $srch_management_unit_id            = $input['srch_management_unit_id'];

        $srch_purchase_date_start_ptBR      = $input['srch_purchase_date_start'];

        $input['srch_purchase_date_start']  = \DateTime::createFromFormat('d/m/Y', $input['srch_purchase_date_start']);
        $input['srch_purchase_date_start']  = $input['srch_purchase_date_start']->format('Y-m-d');
        $srch_purchase_date_start           = $input['srch_purchase_date_start'];

        $srch_purchase_date_end_ptBR        = $input['srch_purchase_date_end'];

        $input['srch_purchase_date_end']    = \DateTime::createFromFormat('d/m/Y', $input['srch_purchase_date_end']);
        $input['srch_purchase_date_end']    = $input['srch_purchase_date_end']->format('Y-m-d');
        $srch_purchase_date_end             = $input['srch_purchase_date_end'];

        #dd($srch_purchase_date_end);

        $output = public_path() . '/reports/patrimonials/allPurchasesByManagementUnitPeriod_'.date("Ymd_His");
        $input = public_path() . '/reports/patrimonials/allPurchasesByManagementUnitPeriod.jrxml';

        $conditions = array("jsp_management_unit_id" => $srch_management_unit_id, "jsp_purchase_date_start" => $srch_purchase_date_start, "jsp_purchase_date_start_ptBR" => $srch_purchase_date_start_ptBR, "jsp_purchase_date_end" => $srch_purchase_date_end, "jsp_purchase_date_end_ptBR" => $srch_purchase_date_end_ptBR);

        $ext = "pdf";

        $database = \Config::get('database.connections.mysql');

        $report = new JasperPHP;
        $report->process
        (
            $input,
            $output,
            array('pdf'),
            $conditions,
            $database
        )->execute();

        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename=allPurchasesByManagementUnitPeriod_'.date("Ymd_His").'.'.$ext);
        header('Content-Transfer-Encoding: binary');
        header('Expires: 0');
        header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
        header('Pragma: public');
}