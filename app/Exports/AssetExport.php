<?php
namespace App\Exports;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use PhpOffice\PhpSpreadsheet\Shared\Date;
use Maatwebsite\Excel\Concerns\WithColumnFormatting;
use App\Asset;
use PhpOffice\PhpSpreadsheet\Style\NumberFormat;

class AssetExport implements FromCollection, WithMapping, WithHeadings,WithColumnFormatting {



    public function collection()
    {

        $asset = Asset::where('scrap','=',0)->select('sap_no','asset_user','model','serial_number','created_at','updated_at')->get();

        return $asset;

    }

    public function headings(): array
    {
        return [
            'SAP NO',
            'ASSET USER',
            'MODEL',
            'SERIAL NUMBER',
            'CREATED_AT',
            'UPDATED_AT',
        ];
    }
    public function map($asset): array
    {
        return [
            $asset->sap_no,
            $asset->asset_user,
            $asset->model,
            $asset->serial_number,
            Date::dateTimeToExcel($asset->created_at),
            Date::dateTimeToExcel($asset->updated_at),
        ];
    }

    public function columnFormats():array {


        return[
           'E' => NumberFormat::FORMAT_DATE_DATETIME,
           'F' =>  NumberFormat::FORMAT_DATE_DATETIME,
        ];
    }

}