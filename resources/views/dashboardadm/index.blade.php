@extends('layout.main')
@section('title, dashboard')
@section('content')
<main>

      <div class="recent-grid">
        <div class="projects">
          <div class="card">
            <div class="card-header">
              <h3>Pesanan</h3>

              <button class="las la-angle-double-right">lihat</button>
            </div>
              
            <div class="card-body">

            <example-componenet></example-componenet>


              <div class="table-responsive">
                <table width=100%>
                  <thead>
                    <tr>
                      <td>Nama Barang</td>
                      <td>Keadaan</td>
                      <td>Status</td>
                    </tr>
                  </thead>
                    
                  <tbody>
                    <tr>
                      <td>Keyboard Logitech</td>
                      <td>Di Antar</td>
                      <td>
                        <span class="status Green"></span>
                        Dalam Perjalanan
                      </td>
                    </tr>
                    <tr>
                      <td>Mouse Pad Logitech</td>
                      <td>Dikemas</td>
                      <td>
                        <span class="status Yellow"></span>
                        Menunggu Kurir
                      </td>
                    </tr>
                    <tr>
                      <td>Mouse Logitech</td>
                      <td>Belum Dikemas</td>
                      <td>
                        <span class="status Red"></span>
                        Dalam Proses
                      </td>
                    </tr>
                    <tr>
                      <td>EarPhone</td>
                      <td>Dikemas</td>
                      <td>
                        <span class="status Yellow"></span>
                        Menunggu Kurir
                      </td>
                    </tr>
                    <tr>
                      <td>Smart Watch</td>
                      <td>Siap Di Antar</td>
                      <td>
                        <span class="status Green"></span>
                        Dalam Perjalanan
                      </td>
                    </tr>
                    <tr>
                      <td>HP Realme</td>
                      <td>Siap Di Antar</td>
                      <td>
                        <span class="status Green"></span>
                        Dalam Perjalanan
                      </td>
                    </tr>
                    <tr>
                      <td>Jam Tangan</td>
                      <td>Dikemas</td>
                      <td>
                        <span class="status Yellow"></span>
                        Menunggu Kurir
                      </td>
                    </tr>
                    <tr>
                      <td>Laptop Samsung</td>
                      <td>Siap Di Antar</td>
                      <td>
                        <span class="status Green"></span>
                        Dalam Perjalanan
                      </td>
                    </tr>
                    <tr>
                      <td>Headset Sony</td>
                      <td>Belum Dikemas</td>
                      <td>
                        <span class="status Red"></span>
                        Dalam Proses
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>

  </main>
@endsection

