<!-- Halaman Input Material -->
      <main>
        <div class="head-title">
          <div class="left">
            <h1>Material Entry</h1>
            <ul class="breadcrumb">
              <li>
                <a href="#">Dashboard</a>
              </li>
              <li><i class="bx bx-chevron-right"></i></li>
              <li>
                <a class="active" href="#">Material In</a>
              </li>
            </ul>
          </div>
          <a href="#" class="btn-download">
            <i class="bx bxs-cloud-download"></i>
            <span class="text">Download PDF</span>
          </a>
        </div>
        <!-- INPUT MATERIAL CARD -->
        <section class="card form-card">
          <header class="card-header">
            <li>
              <p class="muted">
                Enter material data according to the storage control form
              </p>
            </li>
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
              <label for="no_lot">Item Number</label>
              <input
                id="no_lot"
                name="no_lot"
                type="text"
                placeholder="Contoh: 061"
                required
              />
            </div>

            <!-- row 2 -->
            <div class="form-group">
              <label for="kode_gudang">Search Name</label>
              <input
                id="type"
                name="type"
                type="text"
                placeholder="Contoh: 67782"
                required
              />
            </div>

            <div class="form-group">
              <label for="jenis_material">Material Name</label>
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
              <label for="tanggal">Date</label>
              <input id="tanggal" name="tanggal" type="date" required />
            </div>

            <div class="form-group keterangan-group">
              <label for="Keterangan">Keterangan</label>
              <input type="text" name="Keterangan" placeholder="Keterangan" />
            </div>

            <div class="form-group">
              <label for="konfirmasi">Konfirmasi Leader</label>
              <select id="konfirmasi" name="konfirmasi" required>
                <option value="">-- Pilih Leader --</option>
                <option value="budi">Mr. Syeh Aji</option>
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
      <!-- Input Material End -->