@extends('layout.main')
@section('title, dashboard')
@section('content')
<main>

    <div class="cards">

      <div class="card-single">
        <div>
          <h1>50</h1>
          <span>pelanggan</span>
        </div>
        <div>
          <span class="las la-users"></span>
        </div>
      </div>

      <div class="card-single">
        <div>
          <h1>125</h1>
          <span>Pesanan</span>
        </div>
        <div>
          <span class="las la-shopping-bag"></span>
        </div>
      </div>

      <div class="card-single">
        <div>
          <h1>176</h1>
          <span>Mobil Siap</span>
        </div>
        <div>
          <span class="las la-archive"></span>
        </div>
      </div>

      <div class="card-single">
        <div>
          <h1>1000k</h1>
          <span>penghasilan</span>
        </div>
        <div>
          <span class="las la-wallet"></span>
        </div>
      </div>
        
    </div>

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

        <div class="customers">

          <div class="card">
            <div class="card-header">
              <h3>Pelanggan Baru</h3>

              <button class="las la-angle-double-right">lihat</button>
            </div>
              
            <div class="card-body">
              <div class="customer">
                <div>
                  <img src="{{ ('user-img3.avif') }}" width="40px" height="40px" alt="">
                  <div>
                    <h4>Bang-Beng</h4>
                    <small>Pelanggan</small>
                  </div>
                </div>
                <div class="logo">
                  <span class="las la-user-circle"></span>
                  <span class="las la-comment"></span>
                  <span class="las la-phone"></span>
                </div>
              </div>

              <div class="customer">
                <div>
                  <img src="{{ ('user-img4.avif') }}" width="40px" height="40px" alt="">
                  <div>
                    <h4>Asep</h4>
                    <small>Pelanggan</small>
                  </div>
                </div>
                <div>
                  <span class="las la-user-circle"></span>
                  <span class="las la-comment"></span>
                  <span class="las la-phone"></span>
                </div>
              </div>

              <div class="customer">
                <div>
                  <img src="{{ ('user-img5.png') }}" width="40px" height="40px" alt="">
                  <div>
                    <h4>Mamah udin</h4>
                    <small>Pelanggan</small>
                  </div>
                </div>
                <div>
                  <span class="las la-user-circle"></span>
                  <span class="las la-comment"></span>
                  <span class="las la-phone"></span>
                </div>
              </div>

              <div class="customer">
                <div>
                  <img src="{{ ('user-img5.png') }}" width="40px" height="40px" alt="">
                  <div>
                    <h4>Joni</h4>
                    <small>Pelanggan</small>
                  </div>
                </div>
                <div>
                  <span class="las la-user-circle"></span>
                  <span class="las la-comment"></span>
                  <span class="las la-phone"></span>
                </div>
              </div>

              <div class="customer">
                <div>
                  <img src="{{ ('user-img5.png') }}" width="40px" height="40px" alt="">
                  <div>
                    <h4>Joni</h4>
                    <small>Pelanggan</small>
                  </div>
                </div>
                <div>
                  <span class="las la-user-circle"></span>
                  <span class="las la-comment"></span>
                  <span class="las la-phone"></span>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>

  </main>
@endsection

