<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 50%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>

<table>
    <thead>
        <tr>
            <th>Nama Pembeli</th>
            <th>Jenis Barang</th>
            <th>Total</th>
            <th>Dibayar</th>
            <th>Kembali</th>
        </tr>
    </thead>

    <tbody>
        @if($transaksi->count())
        @foreach($transaksi as $tr)
        <tr>
            <td>{{ $tr->nama_pembeli }}</td>
            <td>
                @foreach( $tr->rincian as $item)
                {{ $item->barang->nama_barang}}{{ $loop->last ? '' : ',' }}
                @endforeach
            </td>
            <td>{{ $tr->total_belanja }}</td>
            <td>{{ $tr->dibayar }}</td>
            <td>{{ $tr->kembalian }}</td>
        </tr>
        @endforeach
        @else
            <tr>
                <td>Belum Ada Transaksi</td>
            </tr>
        @endif

    </tbody>
</table>

<p style="margin-top: 25px;"><a href="/" >kembali</a></p>