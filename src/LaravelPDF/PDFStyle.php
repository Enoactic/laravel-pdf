<?php

namespace LaravelPDF;

class PDFStyle
{
    public static function getHeaderStyle()
    {
        $styleArray = [
            'font'  => array(
                'color' => [
                    'argb' => '000000',
                ],
                'size'  => 13,
                'name'  => 'Verdana'
            ),
            'fill' => array(
                'fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,
                'color' => [
                    'argb' => 'CECECE',
                ],
            ),
            'borders' => array(
                'borders' => [
                    'allBorders' => [
                        'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                        'color' => ['argb' => '000000'],
                    ],
                ],
            ),
            'alignment' => array(
                'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
                'vertical' => \PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER
            )
        ];

        return $styleArray;
    }
}
