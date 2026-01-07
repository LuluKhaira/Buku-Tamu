const modalEdit = new bootstrap.Modal(document.getElementById('modalEdit'));
    const modalDelete = new bootstrap.Modal(document.getElementById('modalDelete'));
    let selectedId = null;

    // Edit
    document.querySelectorAll('.btn-edit').forEach(btn => {
      btn.addEventListener('click', function() {
        const tr = this.closest('tr');
        selectedId = tr.dataset.id;
        document.getElementById('editNama').value = tr.children[3].textContent.trim();
        document.getElementById('editNoHp').value = tr.children[4].textContent.trim();
        document.getElementById('editInstansi').value = tr.children[8].textContent.trim();
        document.getElementById('editTujuan').value = tr.children[9].textContent.trim();
        document.getElementById('editStatus').value = tr.dataset.status;
        modalEdit.show();
      });
    });
    

    document.getElementById('btnSimpanEdit').addEventListener('click', () => {
      const formData = new FormData();
      formData.append('no_pengunjung', selectedId);
      formData.append('nama', document.getElementById('editNama').value);
      formData.append('no_hp', document.getElementById('editNoHp').value);
      formData.append('instansi', document.getElementById('editInstansi').value);
      formData.append('tujuan', document.getElementById('editTujuan').value);
      formData.append('status', document.getElementById('editStatus').value);

      fetch('../config/data_kunjungan_update.php', {
          method: 'POST',
          body: formData
        })
        .then(res => res.json())
        .then(res => {
          if (res.status === 'success') {
            alert('Berhasil update');
            location.reload();
          } else alert('Gagal: ' + res.message);
        });
    });

    // Delete
    document.querySelectorAll('.btn-delete').forEach(btn => {
      btn.addEventListener('click', () => {
        selectedId = btn.closest('tr').dataset.id;
        modalDelete.show();
      });
    });
    document.getElementById('btnConfirmDelete').addEventListener('click', () => {
      const formData = new FormData();
      formData.append('no_pengunjung', selectedId);
      fetch('../config/data_kunjungan_delete.php', {
          method: 'POST',
          body: formData
        })
        .then(res => res.json())
        .then(res => {
          if (res.status === 'success') {
            alert('Berhasil hapus');
            location.reload();
          } else alert('Gagal: ' + res.message);
        });
    });

    // Tooltip
    document.querySelectorAll('[data-bs-toggle="tooltip"]').forEach(el => new bootstrap.Tooltip(el));