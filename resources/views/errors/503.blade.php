@extends('errors::minimal')

@section('title', __('Service Unavailable'))
@section('code', '503')
<<<<<<< HEAD
@section('message', __($exception->getMessage() ?: 'Service Unavailable'))
=======
@section('message', __('Service Unavailable'))
>>>>>>> fbf12ee069d319ef313e031397fef5add7eff564
