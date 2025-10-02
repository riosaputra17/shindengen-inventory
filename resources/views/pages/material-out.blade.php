 @include('layouts.header', ['title' => 'Material Out'])
@include('layouts.sidebar')

<section id="content">
  @include('layouts.navbar')
 
 <main>
        <div class="head-title">
          <div class="left">
            <h1>Material Out</h1>
            <ul class="breadcrumb">
              <li>
                <a href="#">Dashboard</a>
              </li>
              <li><i class="bx bx-chevron-right"></i></li>
              <li>
                <a class="active" href="#">Material Out</a>
              </li>
            </ul>
          </div>
        </div>

        <section class="card form-card">
          <header class="card-header">
            <h2>Input Material</h2>
            <p class="muted">
              Masukkan data material sesuai form kontrol penyimpanan.
            </p>
          </header>

          <form
            id="materialForm"
            class="form-grid"
            autocomplete="off"
            novalidate
          >
            <!-- row 1 -->
            <div class="form-group">
              <label for="type">Type</label>
              <input
                id="type"
                name="type"
                type="text"
                placeholder="Contoh: SH8667A"
                required
              />
            </div>

            <div class="form-group">
              <label for="no_lot">No-Lot</label>
              <input
                id="no_lot"
                name="no_lot"
                type="text"
                placeholder="Contoh: 061"
                required
              />
            </div>

            <div class="form-group">
              <label for="tanggal">Tanggal</label>
              <input id="tanggal" name="tanggal" type="date" required />
            </div>

            <!-- row 2 -->
            <div class="form-group">
              <label for="kode_gudang">Kode Gudang</label>
              <select id="kode_gudang" name="kode_gudang" required>
                <option value="">-- Pilih Gudang --</option>
                <option value="G01">G01 - Gudang A</option>
                <option value="G02">G02 - Gudang B</option>
                <option value="G03">G03 - Gudang C</option>
              </select>
            </div>

            <div class="form-group">
              <label for="jenis_material">Jenis Material</label>
              <select id="jenis_material" name="jenis_material" required>
                <option value="">-- Pilih Jenis --</option>
                <option value="connector">Connector</option>
                <option value="case">Case</option>
                <option value="holder">Holder</option>
                <option value="back_cover">Back Cover</option>
                <option value="other">Lainnya</option>
              </select>
            </div>

            <div class="form-group">
              <label for="qty">Qty</label>
              <input
                id="qty"
                name="qty"
                type="number"
                min="1"
                placeholder="Jumlah"
                required
              />
            </div>

            <!-- row 3 -->
            <div class="form-group">
              <label for="status">Status</label>
              <select id="status" name="status" required>
                <option value="">-- Pilih Status --</option>
                <option value="ok">OK</option>
                <option value="ng">NG</option>
                <option value="pending">Pending</option>
              </select>
            </div>

            <div class="form-group">
              <label for="konfirmasi">Konfirmasi Leader</label>
              <select id="konfirmasi" name="konfirmasi" required>
                <option value="">-- Pilih Leader --</option>
                <option value="budi">Budi Santoso</option>
                <option value="andi">Andi Wijaya</option>
                <option value="sari">Sari Lestari</option>
                <option value="dedi">Dedi Kurniawan</option>
                <option value="lina">Lina Marlina</option>
                <option value="agus">Agus Pratama</option>
              </select>
            </div>

            <!-- actions (full width) -->
            <div class="form-actions">
              <button type="reset" class="btn btn-secondary">Reset</button>
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
        </section>
      </main>

      @include('layouts.footer')