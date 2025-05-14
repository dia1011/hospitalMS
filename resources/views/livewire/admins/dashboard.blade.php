<Head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</Head>
<div class="container mt-4">
    <div class="row">
        <div class="col-md-4">
            <div class="card bg-primary text-white">
                <div class="card-body">
                    <h5 class="card-title"><i class="fas fa-users"></i> Total Staff</h5>
                    <p class="card-text">{{ $employees }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card bg-success text-white">
                <div class="card-body">
                    <h5 class="card-title"><i class="fa-solid fa-user-doctor"></i> Total Doctors</h5>
                    <p class="card-text">{{ $doctors }}</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card bg-warning text-white">
                <div class="card-body">
                    <h5 class="card-title"><i class="bi bi-receipt"></i> Total Invoice</h5>
                    <p class="card-text">{{ $bills }}</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-md-4">
            <div class="card bg-danger text-white">
                <div class="card-body">
                    <h5 class="card-title"><i class="fas fa-procedures"></i> Total Patients</h5>
                    <p class="card-text">{{ $patients }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card bg-secondary text-white">
                <div class="card-body">
                    <h5 class="card-title"><i class="fas fa-user-tie"></i> Total HODs</h5>
                    <p class="card-text">{{ $hods }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card bg-info text-white">
                <div class="card-body">
                    <h5 class="card-title"><i class="fas fa-user-plus"></i> Total Subscribers</h5>
                    <p class="card-text">{{ $subscribers }}</p>
                </div>
            </div>
        </div>
        
    </div>
    <div class="row mt-4">
        <div class="col-md-4">
            <div class="card bg-warning text-white">
                <div class="card-body">
                    <h5 class="card-title"><i class="fa fa-file-contract" aria-hidden="true"></i> Total OPD Reports</h5>
                    <p class="card-text">{{ $operationreports }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card bg-primary text-white">
                <div class="card-body">
                    <h5 class="card-title"><i class="fa-solid fa-address-book"></i> Total Contacte Meassage</h5>
                    <p class="card-text">{{ $contacteus }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card bg-dark text-white">
                <div class="card-body">
                    <h5 class="card-title"><i class="fas fa-calendar-plus"></i> Total Requested Appointments</h5>
                    <p class="card-text">{{ $requestedAppointment }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
