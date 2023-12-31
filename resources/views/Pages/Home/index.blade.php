@extends('Layout.master')
@section('title', 'Coffee Blend')
@section('content')

    <!----------------------------------------------- Header ----------------------------------------------->

    @include('Pages.Home.Sections.header')

    <!--///////////////////////////////////////// END Of Header //////////////////////////////////////////-->
    
	<!-------------------------------------------- Best Sellers -------------------------------------------->
	
    @include('Pages.Home.Sections.bestSellers')

	<!--////////////////////////////////////// END Of Best Sellers //////////////////////////////////////-->

	<!------------------------------------------- Calculations -------------------------------------------->
	
    @include('Pages.Home.Sections.calculations')

	<!--/////////////////////////////////////// END Of Calculations //////////////////////////////////////-->

	<!----------------------------------------- What's New With Us ----------------------------------------->
	
    @include('Pages.Home.Sections.new')

	<!--/////////////////////////////////// END Of What's New With Us ////////////////////////////////////-->
    
	<!---------------------------------------------- Services ---------------------------------------------->

    @include('Pages.Home.Sections.services')

	<!--///////////////////////////////////////// END Of Services /////////////////////////////////////////-->
	
	<!---------------------------------------------- Our Story ---------------------------------------------->
	
    @include('Pages.Home.Sections.ourStory')

	<!--///////////////////////////////////////// END Of Our Story ////////////////////////////////////////-->
    <hr style="border-top: 1px solid gray;">

@endsection