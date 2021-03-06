@extends('layouts.app')

@section('title')
    Invoices
@endsection

@section('subtitle')
@endsection

@section('breadcrumbs')
    {!! Breadcrumbs::render('invoice.index') !!}
@endsection

@section('content')

    <div>
        <a href="{{ route('invoice.create') }}" class="btn btn-primary btn-sm pull-right">
            <i class="fa fa-plus"></i>
            Create Invoice
        </a>
    </div>
    <br>

    @if($invoices->count())
        <table class="table table-hover">
            <thead>
                <tr>
                    <th> Number </th>
                    <th> Date </th>
                    <th> Due Date </th>
                    <th> Client </th>
                    <th> Amount </th>
                    <th> <span class="pull-right"> Actions </span> </th>
                </tr>
            </thead>
            <tbody>
                @foreach($invoices as $invoice)
                    <tr
                        class="item-container"
                        data-item-name="{{ $invoice->number }}"
                        data-item-destroy-route="{{ route('invoice.destroy', ['invoice' => $invoice]) }}"
                    >
                        <td>
                            <a href="{{ route('invoice.show', ['invoice' => $invoice]) }}">
                                {{ $invoice->number }}
                            </a>
                        </td>
                        <td> {{ $invoice->date }} </td>
                        <td> {{ $invoice->due_date }} </td>
                        <td>
                            <a href="{{ route('client.show', ['client' => $invoice->getClient()]) }}">
                                {{ $invoice->getClient()->name }}
                            </a>
                        </td>
                        <td> {{ $invoice->amountForHumans }} </td>
                        <td>
                            <div class="btn-group pull-right">
                                <a
                                    href="{{ route('invoice.edit', ['invoice' => $invoice]) }}"
                                    class="btn btn-default"
                                >
                                    <i class="fa fa-edit"></i>
                                </a>
                                <button class="btn btn-default delete-item-button">
                                    <i class="fa fa-trash"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <div class="">
            You have not created any invoices yet.
        </div>
    @endif

@endsection
