@include('header')
<div id="wrapper" cl>
    @include('navbar')
    <div id="content-wrapper" class="d-flex flex-column">
        <div id="content">
            <div class="container-fluid col-md-12">
                @include('users_content')
            </div>
        </div>
    </div>
</div>
@include('footer')

<script>
    $(document).ready(function () {
        var table = $('#alis_fatura_table').DataTable({
            scrollX: true,
            scrollY: '45vh',
            columns: [
                {"data": "name_surname"},
                {"data": "username"},
                {"data": "phone_number"},
                {"data": "islem"}
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
            order: [[1, 'asc']],
            "language": {"url": "https://cdn.datatables.net/plug-ins/1.11.3/i18n/tr.json"},
        });
        $.get("getAllUsers", function (res) {
            if (res != 2) {
                var json = JSON.parse(res);
                table.rows.add(json).draw(false);
            } else {
                alert("Veri Bulunamadı");
            }
        })
    });
</script>

