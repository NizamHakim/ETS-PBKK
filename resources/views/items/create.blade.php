<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add item</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <h1 class="text-center">Add New Item</h1>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form method="POST" action="/dashboard/items/store">
                    @csrf
                    {{-- Jenis --}}
                    <div class="mb-3">
                        <label for="jenis">Pilih Jenis</label>
                        <select class="form-select" id="jenis" name="jenis">
                            @foreach ($jenis as $j)
                                <option value="{{ $j->id }}">{{ $j->nama }}</option>
                            @endforeach
                        </select>
                        @error('jenis')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    {{-- Kondisi --}}
                    <div class="mb-3">
                        <label for="kondisi">Pilih Kondisi</label>
                        <select class="form-select" id="kondisi" name="kondisi">
                            @foreach ($kondisi as $k)
                                <option value="{{ $k->id }}">{{ $k->nama }}</option>
                            @endforeach
                        </select>
                        @error('kondisi')
                            <div class="alert alert-danger my-2">{{ $message }}</div>
                        @enderror
                    </div>
                    {{-- Keterangan --}}
                    <div class="mb-3">
                        <label for="keterangan" class="form-label">Keterangan</label>
                        <textarea class="form-control" id="keterangan" name="keterangan" rows="3" value="{{old('keterangan')}}"></textarea>
                        @error('keterangan')
                            <div class="alert alert-danger my-2">{{ $message }}</div>
                        @enderror
                    </div>
                    {{-- Kecacatan --}}
                    <div class="mb-3">
                        <label for="kecacatan" class="form-label">Kecacatan (opsional)</label>
                        <textarea class="form-control" id="kecacatan" name="kecacatan" rows="3" value="{{old('kecacatan')}}"></textarea>
                    </div>
                    {{-- Jumlah Barang --}}
                    <div class="mb-3">
                        <label for="jumlah" class="form-label">Jumlah Barang</label>
                        <input type="number" class="form-control" id="jumlah" name="jumlah" placeholder="Jumlah Barang" value="{{old('jumlah')}}">
                        @error('jumlah')
                            <div class="alert alert-danger my-2">{{ $message }}</div>
                        @enderror
                    </div>
                    {{-- Image --}}
                    <div class="mb-3">
                        <label for="image" class="form-label">Image</label>
                        <input type="file" class="form-control" id="image" name="image" accept="image/*" value="{{old('image')}}">
                        @error('image')
                            <div class="alert alert-danger my-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <a href="/dashboard/items" class="btn btn-danger">Back to Items List</a>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>