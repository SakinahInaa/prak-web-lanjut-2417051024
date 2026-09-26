<div class="card card-custom overflow-hidden">
  <div class="table-responsive">
    <table class="table table-hover align-middle mb-0">
      <thead class="bg-light text-secondary text-uppercase small fw-bold">
        <tr>
          <th scope="col" class="py-3 px-4 text-center" style="width: 70px;">#</th>
          <th scope="col" class="py-3 px-4">Nama Lengkap</th>
          <th scope="col" class="py-3 px-4">NPM</th>
          <th scope="col" class="py-3 px-4 text-center">Kelas</th>
        </tr>
      </thead>
      <tbody>
        @forelse ($users as $index => $user)
        <tr>
          <td class="py-3 px-4 text-center fw-bold text-muted">{{ $index + 1 }}</td>
          <td class="py-3 px-4">
            <div class="d-flex align-items-center gap-3">
              <div class="avatar text-white rounded-circle d-flex align-items-center justify-content-center fw-bold shadow-sm" 
                   style="width: 40px; height: 40px; background-color: var(--star-blue); font-size: 15px;">
                {{ strtoupper(substr($user->nama ?? 'U', 0, 1)) }}
              </div>
              <span class="fw-semibold text-dark">{{ $user->nama }}</span>
            </div>
          </td>
          <td class="py-3 px-4">
            <span class="badge bg-light text-dark border px-3 py-2 rounded-pill font-monospace fs-6">
              {{ $user->npm }}
            </span>
          </td>
          <td class="py-3 px-4 text-center">
            <span class="badge bg-star-blue-light text-star-blue px-3 py-2 rounded-pill fw-bold">
              {{ $user->nama_kelas ?? 'Kelas ' . ($user->kelas_id ?? 'A') }}
            </span>
          </td>
        </tr>
        @empty
        <tr>
          <td colspan="4" class="text-center py-5 text-muted">
            <i class="fa-solid fa-folder-open fa-3x mb-3 text-secondary opacity-50 d-block"></i>
            <span class="fw-semibold">Belum ada data pengguna tersimpan.</span>
          </td>
        </tr>
        @endforelse
      </tbody>
    </table>
  </div>
</div>