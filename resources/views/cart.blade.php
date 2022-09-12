<form action="/" method="post">
    @csrf
   @if(session()->has('success'))
    <h2 style="font-weight: bold; color: green;">{{ session('success') }}</h2>
   @endif
    <ul>
        <li><p>Nama Pembeli: </p><input type="text" name="nama_pembeli" placeholder="Nama" autocomplete="off"></li>

        <li><p>Barang Belanja:</p>
            @foreach($barang as $b)
            <input type="checkbox" name="jenis_barang[]" value="{{ $b->id_jenis }}" autocomplete="off">{{ $b->nama_barang }}
            @endforeach
        </li>

        <li><p>Total Belanja: </p><input type="number" id="total_belanja" name="total_belanja" placeholder="Total Belanja" autocomplete="off" onchange="getKembalian()"></li>
        <li><p>Dibayar: </p><input type="number" id="dibayar" name="dibayar" placeholder="Dibayar" autocomplete="off" onchange="getKembalian()"></li>
        <li><p>Kembalian: </p><input type="number" id="kembalian" name="kembalian" placeholder="Kembalian" autocomplete="off"></li>
        <li style="margin-top: 25px"><button type="submit">SIMPAN</button></li>
    </ul>

    <a href="/transaksi">Lihat Transaksi</a>

</form>

<script>
    
    const getKembalian = () =>{
        
        const total = document.querySelector("#total_belanja").value;
        const dibayar = document.querySelector("#dibayar").value;
        const kembalian = total - dibayar;

        document.getElementById("kembalian").value = kembalian;
    }
    
</script>