<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%kepel}}`.
 */
class m231227_011157_create_kepel_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%kepel}}', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer()->notNull(),
            'tahun' => $this->integer(),
            'dibuat_standar_pelayanan' => $this->string(5),
            'jumlah_pelayanan_dimiliki' => $this->integer(2),
            'jumlah_pelayanan_dibuat' => $this->integer(2),
            'pelayanan_memenuhi_14komponen' => $this->string(5),
            'pelayanan_melibatkan_masyarakat' => $this->string(5),
            'pelayanan_telah_ditetapkan' => $this->string(5),
            'pelayanan_monev' => $this->string(5),
            'sp_melibatkan_masyarakat' => $this->string(5),
            'unsur_masyarakat_dilibatkan' => $this->text(),
            'sp_dipublikasi' => $this->string(5),
            'sp_dipublikasi_6komponen_service_delivery' => $this->string(5),
            'media_publikasi' => $this->text(),
            'pernyataan_peninjauan_ulang' => $this->string(128),
            'maklumat_pelayanan_ditetapkan' => $this->string(5),
            'maklumat_pelayanan_sesuai_pp' => $this->string(5),
            'maklumat_pelayanan_dipublikasi' => $this->string(5),
            'media_publikasi_maklumat_pelayanan' => $this->string(15),
            'melaksanakan_skm' => $this->string(5),
            'berapakali_setahun_skm' => $this->integer(5),
            'nilai_rata_rata_skm' => $this->string(10),
            'skm_sesuai_permenpanrb' => $this->string(5),
            'skm_dipublikasi' => $this->string(5),
            'media_publikasi_skm_menggunakan' => $this->string(15),
            'hasil_skm_ditindaklanjuti' => $this->string(5),
            'jumlah_media_publikasi_skm' => $this->text(),
            'rencana_tindak_lanjut_skm' => $this->string(5),
            'persentase_rencana_tindaklanjut_skm_1tahun' => $this->integer(3),
            'laporan_tindaklanjut' => $this->string(5),
            'hasil_skm_ditindaklanjuti' => $this->string(5),
            'berapa_lama_tindaklanjut_skm' => $this->string(64)
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%kepel}}');
    }
}
