@extends('front.layouts.home')

@section('title')
  <title>{{ $loaitin->ten}}</title>
@endsection

@section('content')


  <div class="block3" >
    <div class="portlet-header">
      <a href="javascript:void(0);">
        <h4 class="portlet-header-title no-pd-top"><img src="/images/background/lotus.ico" alt="" width="26px"> {{ $loaitin->ten}}</h4>
      </a>
    </div>

    <div class="col-md-12" style="padding: 5px">

      @if ( count($vbtheoloai) > 0 )

      <div class="dv" style="padding: 5px">
        <div class="dv-body">
          <table id="example1" class="dv-table">
            <thead>
              <tr>
                <th>
                  <span>Số VB</span>
                </th>
                <th>
                  Ngày ban hành
                </th>

                <th>
                  <span>Trích yếu</span>
                </th>

                <th>
                  <span>Người kí</span>
                </th>
                <th>
                  <span>Tệp đính kèm</span>
                </th>
              </tr>
            </thead>

            <tbody>
                @foreach ($vbtheoloai->sortByDesc('ngaybanhanhvb') as $ttl)
                    <tr>
                        <td>{{ $ttl->sovb }}</td>
                        <td>{{ \Carbon\Carbon::parse($ttl->ngaybanhanhvb)->format('d-m-Y') }}</td>
                        <td>{{ $ttl->trichyeuvb }}</td>
                        <td>{{ $ttl->nguoiki }}</td>
                        <td>
                            <a href="{{ $ttl->tepvanban }}" target="_blank">
                                Tải về
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
          </table>
        </div>
      </div>

      @else
        <div class="list-group-item">
          <div class="row">
            <p style="text-align: center"><i class="fa fa-cubes" aria-hidden="true"></i> <em>Xin lỗi bạn, hiện chúng tôi chưa có bài viết nào thuộc chuyên mục này!</em></p>
            <a href="/">
              <p style="text-align: center"><i class="fa fa-reply" aria-hidden="true"></i> <strong>Quay lại</strong></p>
            </a>
          </div>
        </div>
      @endif
    </div>
  </div>


  <!-- DataTables -->
  <script src="bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
  <script src="bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
  <script>
      $(function () {
          $('#example1').DataTable({
              "iDisplayLength": 25,
              "language": {
                  "sProcessing": "Đang xử lý...",
                  "sLengthMenu": "Hiển thị _MENU_ mục",
                  //                    "sZeroRecords": "No se encontraron resultados",
                  //                    "sEmptyTable": "Ningún dato disponible en esta tabla",
                  "sInfo": "Đang hiển thị từ mục _START_ đến mục _END_ trong tổng _TOTAL_ mục",
                  //                    "sInfoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
                  //                    "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
                  "sInfoPostFix": "",
                  "sSearch": "Tìm kiếm:",
                  "sUrl": "",
                  "sInfoThousands": ",",
                  //                    "sLoadingRecords": "Cargando...",
                  "oPaginate": {
                      "sFirst": "Đầu tiên",
                      "sLast": "Cuối cùng",
                      "sNext": "Sau",
                      "sPrevious": "Trước"
                  }
              }
          })

      })
  </script>


@endsection
