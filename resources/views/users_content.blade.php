<div class="col-12 row mt-5">
    <table class="table table-sm table-bordered w-100  nowrap datatable"
           style="cursor:pointer;font-size: 13px;"
           id="alis_fatura_table">
        <thead>
        <tr>
            <th>Fatura No</th>
            <th>Fatura Türü</th>
            <th>Fatura Tarihi</th>
            <th>Cari Kodu</th>
            <th>Firma Adı</th>
            <th>Mal Tutarı</th>
            <th>KDV</th>
            <th>Genel Toplam</th>
            <th>Döviz Tipi</th>
            <th>Açıklama</th>
            <th>Vade Tarihi</th>
            <th>Döviz Kuru</th>
            <th>Döviz Mal Tutarı</th>
            <th>Döviz Mal KDV</th>
            <th>Doviz Genel Toplam</th>
            <th>İşlem</th>
        </tr>
        </thead>
    </table>
</div>

<script>

    $(document).ready(function () {
        var table = $('#alis_fatura_table').DataTable({
            scrollX: true,
            scrollY: '45vh',
            "info": false,
            "paging": false,
            dom: 'Bfrtip',
            buttons: [
                {
                    extend: 'excel',
                    title: "ALIŞ FATURALARI",
                    text: "<i class='fa fa-download'></i> Excel'e Aktar",
                    className: 'excel_alis', // Sınıfı burada tanımlayabilirsiniz
                }
            ],
            searching: false,
            columns: [
                {"data": "fatura_no"},
                {"data": "fatura_turu_adi"},
                {"data": "fatura_tarihi"},
                {"data": "cari_kodu"},
                {"data": "cari_adi"},
                {"data": "tl_ara_toplam"},
                {"data": "tl_kdv"},
                {"data": "tl_genel_toplam"},
                {"data": "doviz_tur"},
                {"data": "aciklama"},
                {"data": "vade_tarihi"},
                {"data": "doviz_kuru"},
                {"data": "ara_toplam"},
                {"data": "kdv_toplam"},
                {"data": "genel_toplam"},
                {"data": "button"}
            ],
            columnDefs: [
                {targets: 2, type: "date-eu"}
            ],
            createdRow: function (new_row, data, dataIndex) {
                $(new_row).find('td').eq(0).css('text-align', 'left');
                $(new_row).find('td').eq(1).css('text-align', 'left');
                $(new_row).find('td').eq(2).css('text-align', 'left');
                $(new_row).find('td').eq(3).css('text-align', 'left');
                $(new_row).find('td').eq(4).css('text-align', 'left');
                $(new_row).find('td').eq(8).css('text-align', 'left');
                $(new_row).find('td').eq(9).css('text-align', 'left');
                $(new_row).find('td').eq(10).css('text-align', 'left');
                $(new_row).find("td").css("text-transform", "uppercase")
            },
            "rowCallback": function (row) {
                $(row).children().css('background-color', '#DDF7E3');
            },
            order: [[2, 'desc']],
            "language": {"url": "https://cdn.datatables.net/plug-ins/1.11.3/i18n/tr.json"},
        });
    });
</script>
