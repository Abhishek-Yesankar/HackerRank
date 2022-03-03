<?php
/**
 * Given the meal price (base cost of a meal), tip percent (the percentage of the meal price being added as tip), 
 * and tax percent (the percentage of the meal price being added as tax) for a meal,
 * find and print the meal's total cost. Round the result to the nearest integer.
 * Example 
 * meal cost = 100
 * tip percent = 15
 * tax percent = 8
 * A tip of 15% * 100 = 15, and the taxes are 8% * 100 = 8.
 * Print the value 123 and return from the function.
 */

/**
  * @param float $meal_cost the cost of food before tip and tax
  * @param int $tip_percent the tip percentage
  * @param int $tax_percent the tax percentage
 */
function solve( float $meal_cost, int $tip_percent, int $tax_percent ) {
   return round( ( ( ( $tax_percent / 100 ) * $meal_cost ) + ( ( $tip_percent / 100 ) * $meal_cost ) + $meal_cost) );
}

//sample input
$meal_cost = 12.00;
$tip_percent = 20;
$tax_percent = 8; 

echo solve( $meal_cost, $tip_percent, $tax_percent );