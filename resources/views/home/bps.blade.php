@extends('layouts.index_view')

@section('content')
<div id="main-content">
    <h2 class="text-center" style="color: #ffbf00">Publikasi BPS Kabupaten Semarang</h2>
    <section class="section">
        <div class="card">
            <div class="row">
                <div class="col mx-auto">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <td style="font-weight: bold; text-align: center;">Judul Berita Resmi Statistik</td>
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
    </section>
</div>

<script type="text/javascript">
    function list_brs(page) {
        var bps = [];
        $.ajax({
            url: '{{ url("/getBps?action=bps&page=") }}' + page,
            success: function(result) {
                //list brs
                $('#list').empty(); //kosongkan div list
                //    console.log(result);
                var count = result.data[0].count;
                for (i = 0; i < count; i++) {
                    // Pengulangan untuk membuat list BRS di halaman tersebut
                    var brs = result.data[1][i];
                    html = "<tr>";
                    html += "<td onclick='return detail_brs(" + brs.brs_id + ");'><a href='#'>" + brs.title + "</a></td>";
                    html += "<td style='font-size: smaller;'>" + brs.rl_date + "</td>";
                    html += "<tr>";
                    $('#list').append(html);
                }

                //list brs
                $('#pagination').empty(); //kosongkan div pagination
                var totalpage = result.data[0].pages;
                for (i = 1; i <= totalpage; i++) {
                    $('#pagination').append('<a href="#" onclick="return list_brs(' + i + ');">[ ' + i + ' ]</a>');
                }

            }
        });
    }

    function detail_brs(id) {
        var detail_bps = [];
        $.ajax({
            url: '{{ url("/getBps?action=detail_bps&id=") }}' + id,
            success: function(result) {
                //menampilkan detail
                var brs = result.data;
                $('#detail').empty(); //kosongkan div detail
                html = "<h1>" + brs.title + "</h1>";
                html += "<hr>Abstraksi<br>";
                html += $("<div/>").html(brs.abstract).text();
                html += "<a href='" + brs.pdf + "' target='_blank'> <button>download (" + brs.size + ")</button></a>";
                $('#detail').append(html);
            }
        });
    }
    list_brs(1);
</script>
@endsection
