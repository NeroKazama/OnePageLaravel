@extends('layouts.app')

@section('content')

    <div id="app">
        <component-ninth v-bind:style=" cNinth == true ? 'z-index: 9999' : 'z-index: -1' " v-if="cNinth == true"  @DonateMethodHide="DonateMethodHide"></component-ninth>
        <div class="w-100">
            <component-first @DonateMethod="DonateMethod"></component-first>
        </div>
        <div class="w-100" id="AboutUs">
            <component-second></component-second>
        </div>
        <div class="w-100" id="Donate">
            <component-third></component-third>
        </div>
        <div class="w-100" id="Masters">
            <component-fourth></component-fourth>
        </div>
        <div class="w-100" id="Customer">
            <component-fifth></component-fifth>
        </div>
        <div class="w-100" id="FAQ">
            <component-sixth></component-sixth>
        </div>
        <div class="w-100" id="ContactUs">
            <component-seventh @DonateMethod="DonateMethod"></component-seventh>
        </div>
    </div>

@endsection
