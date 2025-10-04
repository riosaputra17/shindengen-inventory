@include('layouts.header', ['title' => 'Material In'])
@include('layouts.sidebar')

<section id="content">
  @include('layouts.navbar')

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
                placeholder="Example: SH8667A"
                required
              />
            </div>

            <div class="form-group">
              <label for="no_lot">No-Lot</label>
              <input
                id="no_lot"
                name="no_lot"
                type="text"
                placeholder="Example: 061"
                required
              />
            </div>
            <div class="form-group">
              <label for="no_lot">Item Number</label>
              <input
                id="no_lot"
                name="no_lot"
                type="text"
                placeholder="Example: 061"
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
                placeholder="Example: 67782"
                required
              />
            </div>

            <div class="form-group">
              <label for="jenis_material">Material Name</label>
              <select id="jenis_material" name="jenis_material" required>
                <option value="">-- Choose Material --</option>
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
                placeholder="Quantity"
                required
              />
            </div>

            <!-- row 3 -->
            <div class="form-group">
              <label for="status">Category</label>
              <select id="status" name="status" required>
                <option value="">-- Choose Category --</option>
                <option value="Over-Material">Over Material</option>
                <option value="pending">Pending</option>
              </select>
            </div>
            <div class="form-group">
              <label for="status">Status</label>
              <select id="status" name="status" required>
                <option value="">-- Choose Status --</option>
                <option value="Oke">Oke</option>
                <option value="NG">NG</option>
              </select>
            </div>

            <div class="form-group keterangan-group">
              <label for="Keterangan">Description</label>
              <input type="text" name="Description" placeholder="Description" />
            </div>

            <div class="form-group">
              <label for="konfirmasi">Leader Confirmation</label>
              <select id="konfirmasi" name="konfirmasi" required>
                <option value="">-- Leader Confirmation --</option>
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
</section>

@include('layouts.footer')
