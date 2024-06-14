@extends('layouts.index_view')

@section('content')
<h4 class="text-center" style="color: #ffbf00">Publikasi Tabel Statis BPS Kabupaten Semarang</h4>
<div id="main-content">
    <section class="section">
        <div class="card">
            <div class="row">
                <div class="col mx-auto"> <!-- Tambahkan class mx-auto di sini -->
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <td style="font-weight: bold; text-align: center;">Tabel Statis</td>
                                <td style="font-weight: bold; text-align: center;">Tanggal Rilis</td>
                            </tr>
                        </thead>
                        <tbody id="list"></tbody>
                    </table>
                    <div id="pagination"></div>
                    <hr>
                    <div id="detail"></div>
                </div>
            </div>
        <hr>
    </section>
</div>

<script src="{{ asset('script.js') }}"></script>

<script type="text/javascript">
    function list_static(page) {
        $.ajax({
            url: '{{ url("/getBps?action=static&page=") }}' + page,
            success: function(result) {
                $('#list').empty();
                result = JSON.parse(result);
                var count = result.data[0].count;
                for (i = 0; i < count; i++) {
                    var static = result.data[1][i];
                    html = "<tr>";
                    html += "<td onclick='return detail_static(" + static.table_id + ");'><a href='#'>" + static.title + "</a></td>";
                    html += "<td style='font-size: smaller;'>" + static.updt_date + "</td>";
                    html += "<tr>";
                    $('#list').append(html);
                }

                $('#pagination').empty();
                var totalpage = result.data[0]["pages"];
                for (i = 1; i <= totalpage; i++) {
                    $('#pagination').append('<a href="#" onclick="return list_static(' + i + ');">[ ' + i + ' ]</a>');
                }
            }
        });
    }

    function detail_static(id) {
        $.ajax({
            url: '{{ url("/getBps?action=detail_static&id=") }}' + id,
            success: function(result) {
                result = JSON.parse(result);
                $('#detail').empty();
                var static = result.data;
                html = "<h5 style='text-align: center;'>" + static.title + "</h5>";
                html += $("<div/>").html(static.table).text();
                html += "<a href='" + static.excel + "' target='_blank'> <button>download (" + static.size + ")</button></a>";
                $('#detail').append(html);
            }
        });
    }
    list_static(1);
</script>
@endsection
