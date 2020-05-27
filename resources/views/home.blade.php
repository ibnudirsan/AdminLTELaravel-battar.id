@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if(empty($verify->email_verified_at))
                    {{ __('Akun Anda Belum Terverifikasi, Jika Link Verifikasi sudah lebih dari 60 Menit, Silakan Kirim Kembali ke Email.') }} 
                    
                    <a href="{{ route('verification.resend') }}">
                        <button type="button" class="btn btn-success btn-sm">
                        {{ __('Resend') }}
                        <i class="fa fa-share-square" aria-hidden="true"></i>
                        </button>
                    </a>

                    @elseif(!empty($verify))
                    {{ __('Akun Anda Sudah Terverifikasi.') }}
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
