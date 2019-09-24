<?php

$prime = search($name,$year,$state);
 
?>
@extends('layout.master')
@section('title')
    Associative array search results page
@endsection

@section('content')
        <?php
            if (count($prime) == 0) {
        ?>
                <p>No results found.</p>
        <?php
            } else {
        ?>
        <table class="bordered">
            <thead>
                <tr><th>No.</th><th>Name</th><th>From</th><th>To</th><th>Duration</th><th>Party</th><th>State</th></tr>
            </thead>
            <tbody>
            
            <p>Search results for {{$name}} {{$year}} {{$state}}</p>
            
            <?php

                foreach($prime as $pm) {
                    print
                        "<tr><td>{$pm['index']}</td><td>{$pm['name']}</td><td>{$pm['from']}</td><td>{$pm['to']}</td><td>{$pm['duration']}</td><td>{$pm['party']}</td><td>{$pm['state']}</td></tr>\n";
                }
           
            ?>

            </tbody>
        </table>
        <?php
        }
        ?>

        <form method="get" action="results">
            <table>
                <tr><td>Name: </td><td><input type="text" name="name"></td></tr>
                <tr><td>Year: </td><td><input type="text" name="year"></td></tr>
                <tr><td>State: </td><td><input type="text" name="state"></td></tr>
                <tr><td colspan=2><input type="submit" value="Search">
                <input type="reset" value="Reset"></td></tr>
            </table>
        </form>
        <hr>
@endsection
