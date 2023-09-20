<?php

namespace Kanekescom\Siasn\Api\Simpeg\Transformers;

use League\Fractal\TransformerAbstract;

class ListPensiunTransformer extends TransformerAbstract
{
    /**
     * Transform the ListPensiun model.
     *
     * @param  Kanekescom\Siasn\Simpeg\Models\ListPensiun  $model
     */
    public function transform(array $item): array
    {
        return [
            'id' => $item['id'],
            'nama' => $item['nama'],
            'status_usulan' => $item['statusUsulan'],
            'status_usulan_nama' => $item['statusUsulanNama'],
            'pns_id' => $item['pnsId'],
            'nip_baru' => $item['nipBaru'],
            'pertek_nomor' => $item['pertekNomor'],
            'sk_nomor' => $item['skNomor'],
            'path_sk' => $item['pathSk'],
            'path_pertek' => $item['pathPertek'],
            'pertek_tgl' => $item['pertekTgl'],
            'sk_tgl' => $item['skTgl'],
            'instansi_id' => $item['instansiId'],
            'instansi_nama' => $item['instansiNama'],
            'detail_layanan_nama' => $item['detailLayananNama'],
            'tgl_lahir' => $item['tglLahir'],
            'golongan_id' => $item['golonganId'],
            'golongan_kpp_id' => $item['golonganKppId'],
            'tmt_pensiun' => $item['tmtPensiun'],
        ];
    }
}
