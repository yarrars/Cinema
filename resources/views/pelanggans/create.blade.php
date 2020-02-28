@extends('layouts.main')@section('content')
<div class = "container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="text-left">
                <h2>Input Data</h2>
            </div>
        <div class="text-right" style="margin-bottom:10px;">
            <a class="btn btn-primary" href="{{ route('pelanggans.index') }}">Back</a>
        </div>
</div>

@if($errors->any())
<div class = "alert alert-danger">
    <strong>Whoops!</strong>
    There were some problems with your input.<br>
    <br>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="{{ route('pelanggans.store') }}" method="POST">
        @csrf

        <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Kode Kursi :
                    </strong>
                    <input
                        type="text"
                        name="kode_kursi"
                        class="form-control"
                        placeholder="Kode Kursi"
                        value=""
                        autocomplete="off"></div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Kode Jadwal :
                        </strong>
                        <select
                            class="form-control form-control-md"
                            name="jadwalID"
                            id=""
                            onchange='changeValue(this.value)'
                            required="required">
                            <option value="" disabled="disabled" selected="selected">Kode Jadwal</option>
                            <?php
                                $con = mysqli_connect("localhost", "root","", "bioskop");
                                $query=mysqli_query($con, "select * from jadwals order by jadwalID asc");
                                $result = mysqli_query($con, "select * from jadwals");
                                $jsArray = "var prdName = new Array();\n";
                                while ($row = mysqli_fetch_array($result)) {
                                echo '<option name="jadwalID"  value="' . $row['jadwalID'] . '">' . $row['jadwalID'] . '</option>';
                                $jsArray .= "prdName['" . $row['jadwalID'] . "'] = {judul:'" . addslashes($row['judul']) . "',studio:'".addslashes($row['studio'])."',tanggal:'".addslashes($row['tanggal'])."',jam:'".addslashes($row['jam'])."'};\n";
                                }
                            ?>
                        </select>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Studio :
                        </strong>
                        <input class="form-control" name="judul" id="judul" readonly="readonly"/>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Judul :</strong>
                        <input class="form-control" name="studio" id="studio" readonly="readonly"/>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Tanggal :
                        </strong>
                        <input class="form-control" name="tanggal" id="tanggal" readonly="readonly"/>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Jam :
                        </strong>
                        <input class="form-control" name="jam" id="jam" readonly="readonly"/>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>

        </form>
    </div>
    @endsection

    <script type="text/javascript">
        <?php echo $jsArray; ?>
        function changeValue(id){
            document
                .getElementById('studio')
                .value = prdName[id]
                .studio;
            document
                .getElementById('judul')
                .value = prdName[id]
                .judul;
            document
                .getElementById('tanggal')
                .value = prdName[id]
                .tanggal;
            document
                .getElementById('jam')
                .value = prdName[id]
                .jam;
        };
    </script>
