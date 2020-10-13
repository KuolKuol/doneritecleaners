@extends('layouts.default')

@section('head')
    @component('includes.head')
        @slot('title')
        Deep Clean | Done-Rite Cleaners 
        @endslot    
        @slot('description')
        We provide tailor-made cost effective solutions to meet all your maintenance needs weather it is a condo or apartment complex you can count on us for reliable professional property maintenance service. A good preventive program, plan can avoid costly repairs and save you money we are bonded, insured and work with any size budgets small or large.
        @endslot
    @endcomponent
@endsection

@section('content')
    @component('components.banner')
    @slot('modifier') banner--building @endslot
    @slot('title')
        Deep Clean
        @endslot
    @endcomponent
    <div id='podium-integration'></div>
    <script>
    (function(p,o,d,i,u,m,r) {
    p['podium-integration']=u;p[u]= function() {(p[u].q=p[u].q||[]).push(arguments)},p[u].l=1*new Date();
    m=o.createElement(d),r=o.getElementsByTagName(d)[0];m.async=1;m.src=i+'?t='+1*new Date();r.parentNode.insertBefore(m,r)
    })(window,document,'script','//podiumio.com/int/podiumio.boot.min.js','podiumio');
    podiumio('podiumio','1e32bffc-9c9e-4d23-8ade-f9a6c747f6a0','booking','donerite-cleaners','en','00d1c787-8ec2-45af-a2b5-9e2021ebdf7a');
    </script>


@stop