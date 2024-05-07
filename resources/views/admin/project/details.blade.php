@extends('admin.layout.layout')
<script>
    function Export2Word(element, filename = ''){
    var preHtml = "<html xmlns:o='urn:schemas-microsoft-com:office:office' xmlns:w='urn:schemas-microsoft-com:office:word' xmlns='http://www.w3.org/TR/REC-html40'><head><meta charset='utf-8'><title>Export HTML To Doc</title></head><body>";
    var postHtml = "</body></html>";
    var html = preHtml+document.getElementById(element).innerHTML+postHtml;

    var blob = new Blob(['\ufeff', html], {
        type: 'application/msword'
    });
    
    // Specify link url
    var url = 'data:application/vnd.ms-word;charset=utf-8,' + encodeURIComponent(html);
    
    // Specify file name
    filename = filename?filename+'.doc':'document.doc';
    
    // Create download link element
    var downloadLink = document.createElement("a");

    document.body.appendChild(downloadLink);
    
    if(navigator.msSaveOrOpenBlob ){
        navigator.msSaveOrOpenBlob(blob, filename);
    }else{
        // Create a link to the file
        downloadLink.href = url;
        
        // Setting the file name
        downloadLink.download = filename;
        
        //triggering the function
        downloadLink.click();
    }
    
    document.body.removeChild(downloadLink);
}
</script>
@section('content')
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2">
                <h3 class="content-header-title mb-0">Project Details</h3>
                <div class="row breadcrumbs-top">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item active">Project Details</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        @if (Session::has('success_message'))
        <div class="alert alert-success alert-dismissible fade show mb-2" role="alert">
            <strong>Success!</strong> {{ Session::get('success_message') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif
        <div class="content-body">
            <section id="file-export">
                <div class="row">
                    <div class="col-12" id="exportContent">
                        <div class="card">
                            <div class="card-header"></div>
                            <div class="card-content collapse show">
                                <div class="px-2 mb-2">
                                    <h4>PROJECT INFORMATION</h4>
                                    <table class="table table-bordered">
                                        <tr>
                                            <th style="width: 30%;">PROJECT STATUS:</th>
                                            <td>{{ $projectForm->status }}</td>
                                        </tr>
                                        <tr>
                                            <th>PROJECT TYPE:</th>
                                            <td>{{ $projectForm->project_type }}</td>
                                        </tr>
                                        <tr>
                                            <th>PROJECT NAME:</th>
                                            <td>{{ $projectForm->project_name }}</td>
                                        </tr>
                                        <tr>
                                            <th>INDUSTRY:</th>
                                            <td>{{ $projectForm->industry }}</td>
                                        </tr>
                                        <tr>
                                            <th>PROJECT CATEGORY:</th>
                                            <td>{{ $projectForm->category }}</td>
                                        </tr>
                                        <tr>
                                            <th>PRODUCTS / SERVICES:</th>
                                            <td>{{ $projectForm->products }}</td>
                                        </tr>
                                        <tr>
                                            <th>PROJECT LOCATION/ADDRESS:</th>
                                            <td>{{ $projectForm->project_location }}</td>
                                        </tr>
                                        <tr>
                                            <th>TOTAL PROJECT COST:</th>
                                            <td>{{ $projectForm->project_cost }}</td>
                                        </tr>
                                        <tr>
                                            <th>PROJECT LAYOUT:</th>
                                            <td>{{ $projectForm->project_layout }}</td>
                                        </tr>
                                        <tr>
                                            <th>EXISTING BANKS AND NBFIs:</th>
                                            <td>{{ $projectForm->existing_bank }}</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header"></div>
                            <div class="card-content collapse show">
                                <div class="px-2 mb-2">
                                    <h4>FINANCIAL INFORMATION OF THE PROJECT</h4>
                                    <table class="table table-bordered">
                                        <tr>
                                            <th>EQUITY % BY SPONSORS</th>
                                            <td>{{ $projectForm->sponsors_equity }}</td>
                                        </tr>
                                        <tr>
                                            <th>DEBT % OF THE PROJECT (already availed)</th>
                                            <td>{{ $projectForm->project_debt }}</td>
                                        </tr>
                                        <tr>
                                            <th>EXISTING LOAN(S) BANK AND OTHER FINANCIAL INSTITUTIONS LIABILITIES / LOAN</th>
                                            <td>{{ $projectForm->loan_bank }}</td>
                                        </tr>
                                        <tr>
                                            <th>FOR THE SELECTED BANK / FINANCIAL INSTITUTION, STATUS OF LOAN(S) (IN MILLION TAKA)</th>
                                            <td>{{ $projectForm->loan_status }}</td>
                                        </tr>
                                        <tr>
                                            <th>OTHER LIABILITIES / LOAN (IN MILLION TAKA)</th>
                                            <td>{{ $projectForm->other_liabilities }}</td>
                                        </tr>
                                        <tr>
                                            <th>YEARLY REVENUE (IN MILLION TAKA)</th>
                                            <td>{{ $projectForm->yearly_revenue }}</td>
                                        </tr>
                                        <tr>
                                            <th>YEARLY NET INCOME (IN MILLION TAKA)</th>
                                            <td>{{ $projectForm->yearly_income }}</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header"></div>
                            <div class="card-content collapse show">
                                <div class="px-2 mb-2">
                                    <h4>CAPITAL INVESTMENT BREAKDOWN OF THE PROJECT</h4>
                                    <table class="table table-bordered">
                                        <tr>
                                            <th>LAND AND LAND DEVELOPMENT</th>
                                            <td>{{ $projectForm->land }}</td>
                                        </tr>
                                        <tr>
                                            <th>BUILDING AND CIVIL WORKS</th>
                                            <td>{{ $projectForm->civil_works }}</td>
                                        </tr>
                                        <tr>
                                            <th>MACHINES AND EQUIPMENT</th>
                                            <td>{{ $projectForm->machines }}</td>
                                        </tr>
                                        <tr>
                                            <th>DETAILS OF EXISTING MORTGAGE ASSETS WITH VALUE ESTIMATION</th>
                                            <td>{{ $projectForm->mortage_assets }}</td>
                                        </tr>
                                        <tr>
                                            <th>OTHER ASSET(S) OF THE PROJECT WITH VALUE ESTIMATION (IN MILLION TAKA)</th>
                                            <td>{{ $projectForm->other_assets }}</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button onclick="Export2Word('exportContent');">Export as .doc</button>
                </div>
            </section>
        </div>
    </div>
</div>
@endsection
