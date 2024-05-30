<x-layout>
        <x-slot name="page_name">Dashboard</x-slot>
        <x-slot name="page_title">Welcome to Dashboard!</x-slot>
        <x-slot name="page_content">
                <div class="row">
                        <div class="col-lg-3 col-6">

                                <div class="small-box bg-info">
                                        <div class="inner">
                                                <h3>3</h3>              
                                                <p>Kelurahan</p>
                                        </div>
                                        <div class="icon">
                                                <i class="ion ion-bag"></i>
                                        </div>
                                        <a href="dashboard/kelurahan" class="small-box-footer">Lihat data kelurahan <i
                                                        class="fas fa-arrow-circle-right"></i></a>
                                </div>
                        </div>

                        
                        <div class="col-lg-3 col-6">
                                
                                <div class="small-box bg-success">
                                        <div class="inner">
                                                <h3>5</h3>
                                                <p>Data Pasien</p>
                                        </div>
                                        <div class="icon">
                                                <i class="ion ion-person-add"></i>
                                        </div>
                                        <a href="dashboard/pasien" class="small-box-footer">Lihat data pasien <i
                                        class="fas fa-arrow-circle-right"></i></a>
                                </div>
                        </div>
                        
                        <div class="col-lg-3 col-6">

                                <div class="small-box bg-warning">
                                        <div class="inner">
                                                <h3>0<sup style="font-size: 20px">%</sup></h3>
                                                <p>(Data kosong)</p>
                                        </div>
                                        <div class="icon">
                                                <i class="ion ion-stats-bars"></i>
                                        </div>
                                        <a href="#" class="small-box-footer">More info <i
                                                        class="fas fa-arrow-circle-right"></i></a>
                                </div>
                        </div>
                        <div class="col-lg-3 col-6">

                                <div class="small-box bg-danger">
                                        <div class="inner">
                                                <h3>0</h3>
                                                <p>(Data Kosong)</p>
                                        </div>
                                        <div class="icon">
                                                <i class="ion ion-pie-graph"></i>
                                        </div>
                                        <a href="#" class="small-box-footer">More info <i
                                                        class="fas fa-arrow-circle-right"></i></a>
                                </div>
                        </div>

                </div>
        </x-slot>
</x-layout>
