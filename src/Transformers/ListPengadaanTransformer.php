<?php

namespace Kanekescom\Siasn\Api\Simpeg\Transformers;

use League\Fractal\TransformerAbstract;

class ListPengadaanTransformer extends TransformerAbstract
{
    /**
     * Transform the ListPengadaan model.
     *
     * @param  Kanekescom\Siasn\Simpeg\Models\ListPengadaan  $model
     */
    public function transform(array $item): array
    {
        return [
            'id' => $item['id'],
            'orang_id' => $item['orang_id'],
            'no_peserta' => $item['no_peserta'],
            'nip' => $item['nip'],
            'nama' => $item['nama'],
            'periode' => $item['periode'],
            'instansi_id' => $item['instansi_id'],
            'no_pertek' => $item['no_pertek'],
            'no_sk' => $item['no_sk'],
            'path_ttd_sk' => $item['path_ttd_sk'],
            'path_ttd_pertek' => $item['path_ttd_pertek'],
            'tgl_pertek' => $item['tgl_pertek'],
            'tgl_sk' => $item['tgl_sk'],
            'tgl_kontrak_mulai' => $item['tgl_kontrak_mulai'],
            'tgl_kontrak_akhir' => $item['tgl_kontrak_akhir'],
            'jenis_formasi_id' => $item['jenis_formasi_id'],
            'jenis_formasi_nama' => $item['jenis_formasi_nama'],
        ];
    }
}
