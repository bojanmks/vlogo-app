<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FoodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    private $food = [
        [ // McDonalds
            "name" => "Big Mac",
            "image" => "mcdonalds_big_mac.jpg",
            "price" => 2.99,
            "category_id" => 2,
            "restaurant_id" => 1
        ],
        [
            "name" => "Big Mac Combo Meal",
            "image" => "mcdonalds_big_mac_combo_meal.jpg",
            "price" => 6.99,
            "category_id" => 8,
            "restaurant_id" => 1
        ],
        [
            "name" => "Cheeseburger",
            "image" => "mcdonalds_cheeseburger.jpg",
            "price" => 1.99,
            "category_id" => 2,
            "restaurant_id" => 1
        ],
        [
            "name" => "Cheeseburger Combo Meal",
            "image" => "mcdonalds_cheeseburger_combo_meal.jpg",
            "price" => 6.99,
            "category_id" => 8,
            "restaurant_id" => 1
        ],
        [
            "name" => "Chicken McNuggets",
            "image" => "mcdonalds_chicken_mcnuggets.jpg",
            "price" => 3.99,
            "category_id" => 6,
            "restaurant_id" => 1
        ],
        [
            "name" => "Coca Cola",
            "image" => "mcdonalds_coca_cola.jpg",
            "price" => 0.99,
            "category_id" => 10,
            "restaurant_id" => 1
        ],
        [
            "name" => "Double Cheeseburger",
            "image" => "mcdonalds_double_cheeseburger.jpg",
            "price" => 2.99,
            "category_id" => 2,
            "restaurant_id" => 1
        ],
        [
            "name" => "Double Quarter Pounder",
            "image" => "mcdonalds_double_quarter_pounder.jpg",
            "price" => 2.99,
            "category_id" => 2,
            "restaurant_id" => 1
        ],
        [
            "name" => "Fanta",
            "image" => "mcdonalds_fanta.jpg",
            "price" => 0.99,
            "category_id" => 10,
            "restaurant_id" => 1
        ],
        [
            "name" => "Hamburger",
            "image" => "mcdonalds_hamburger.jpg",
            "price" => 1.99,
            "category_id" => 2,
            "restaurant_id" => 1
        ],
        [
            "name" => "Hot Caramel Sundae",
            "image" => "mcdonalds_hot_caramel_sundae.jpg",
            "price" => 1.99,
            "category_id" => 4,
            "restaurant_id" => 1
        ],
        [
            "name" => "Hot Fudge Sundae",
            "image" => "mcdonalds_hot_fudge_sundae.jpg",
            "price" => 1.99,
            "category_id" => 4,
            "restaurant_id" => 1
        ],
        [
            "name" => "McChicken",
            "image" => "mcdonalds_mcchicken.jpg",
            "price" => 1.99,
            "category_id" => 2,
            "restaurant_id" => 1
        ],
        [
            "name" => "Quarter Pounder",
            "image" => "mcdonalds_quarter_pounder.jpg",
            "price" => 1.99,
            "category_id" => 2,
            "restaurant_id" => 1
        ],
        [
            "name" => "Sprite",
            "image" => "mcdonalds_sprite.jpg",
            "price" => 0.99,
            "category_id" => 10,
            "restaurant_id" => 1
        ],
        [
            "name" => "World Famous Fries",
            "image" => "mcdonalds_world_famous_fries.jpg",
            "price" => 1.99,
            "category_id" => 3,
            "restaurant_id" => 1
        ],
        [ // KFC
            "name" => "330ml 7up",
            "image" => "kfc_330ml_7up.jpg",
            "price" => 0.99,
            "category_id" => 10,
            "restaurant_id" => 2
        ],
        [
            "name" => "330ml Pepsi",
            "image" => "kfc_330ml_pepsi.jpg",
            "price" => 0.99,
            "category_id" => 10,
            "restaurant_id" => 2
        ],
        [
            "name" => "BBQ Sauce",
            "image" => "kfc_bbq_sauce.jpg",
            "price" => 0.99,
            "category_id" => 14,
            "restaurant_id" => 2
        ],
        [
            "name" => "Colonel Salad",
            "image" => "kfc_colonel_salad.jpg",
            "price" => 3.99,
            "category_id" => 12,
            "restaurant_id" => 2
        ],
        [
            "name" => "Fries",
            "image" => "kfc_fries.jpg",
            "price" => 2.99,
            "category_id" => 3,
            "restaurant_id" => 2
        ],
        [
            "name" => "Hot Wings Bucket",
            "image" => "kfc_hot_wings_bucket.jpg",
            "price" => 8.99,
            "category_id" => 6,
            "restaurant_id" => 2
        ],
        [
            "name" => "Smartster",
            "image" => "kfc_smartster.jpg",
            "price" => 2.99,
            "category_id" => 3,
            "restaurant_id" => 2
        ],
        [
            "name" => "Sweet & Sour Sauce",
            "image" => "kfc_sweet_&_sour_sauce.jpg",
            "price" => 0.99,
            "category_id" => 14,
            "restaurant_id" => 2
        ],
        [
            "name" => "Twister",
            "image" => "kfc_twister.jpg",
            "price" => 3.99,
            "category_id" => 13,
            "restaurant_id" => 2
        ],
        [
            "name" => "Twister Meal",
            "image" => "kfc_twister_meal.jpg",
            "price" => 7.99,
            "category_id" => 8,
            "restaurant_id" => 2
        ],
        [
            "name" => "Variety Meal",
            "image" => "kfc_variety_meal.jpg",
            "price" => 8.99,
            "category_id" => 8,
            "restaurant_id" => 2
        ],
        [
            "name" => "Zinger Box Meal",
            "image" => "kfc_zinger_box_meal.jpg",
            "price" => 8.99,
            "category_id" => 8,
            "restaurant_id" => 2
        ],
        [
            "name" => "Zinger Burger Meal",
            "image" => "kfc_zinger_burger_meal.jpg",
            "price" => 8.99,
            "category_id" => 8,
            "restaurant_id" => 2
        ],
        [
            "name" => "Zinger Burger Single",
            "image" => "kfc_zinger_burger_single.jpg",
            "price" => 2.99,
            "category_id" => 2,
            "restaurant_id" => 2
        ],
        [
            "name" => "Zinger Tower Burger",
            "image" => "kfc_zinger_tower_burger.jpg",
            "price" => 3.99,
            "category_id" => 2,
            "restaurant_id" => 2
        ],
        [ // Subway
            "name" => "Baja Chicken & Bacon Wrap",
            "image" => "subway_baja_chicken_&_bacon_wrap.jpg",
            "price" => 5.99,
            "category_id" => 13,
            "restaurant_id" => 4
        ],
        [
            "name" => "Baja Turkey Avocado Salad",
            "image" => "subway_baja_turkey_avocado_salad.jpg",
            "price" => 3.99,
            "category_id" => 12,
            "restaurant_id" => 4
        ],
        [
            "name" => "Black Forest Ham Salad",
            "image" => "subway_black_forest_ham_salad.jpg",
            "price" => 3.99,
            "category_id" => 12,
            "restaurant_id" => 4
        ],
        [
            "name" => "Buffalo Chicken Sandwich",
            "image" => "subway_buffalo_chicken_sandwich.jpg",
            "price" => 4.49,
            "category_id" => 11,
            "restaurant_id" => 4
        ],
        [
            "name" => "Cold Cut Combo Sandwich",
            "image" => "subway_cold_cut_combo_sandwich.jpg",
            "price" => 3.99,
            "category_id" => 11,
            "restaurant_id" => 4
        ],
        [
            "name" => "Meatball Marinara Sandwich",
            "image" => "subway_meatball_marinara_sandwich.jpg",
            "price" => 5.99,
            "category_id" => 11,
            "restaurant_id" => 4
        ],
        [
            "name" => "Mozza Meat Sandwich",
            "image" => "subway_mozza_meat_sandwich.jpg",
            "price" => 4.99,
            "category_id" => 11,
            "restaurant_id" => 4
        ],
        [
            "name" => "Mozza Meat Wrap",
            "image" => "subway_mozza_meat_wrap.jpg",
            "price" => 4.99,
            "category_id" => 13,
            "restaurant_id" => 4
        ],
        [
            "name" => "Spicy Italian Salad",
            "image" => "subway_spicy_italian_salad.jpg",
            "price" => 3.99,
            "category_id" => 12,
            "restaurant_id" => 4
        ],
        [
            "name" => "Subway Club Sandwich",
            "image" => "subway_subway_club_sandwich.jpg",
            "price" => 4.99,
            "category_id" => 11,
            "restaurant_id" => 4
        ],
        [
            "name" => "Subway Club Wrap",
            "image" => "subway_subway_club_wrap.jpg",
            "price" => 4.99,
            "category_id" => 13,
            "restaurant_id" => 4
        ],
        [
            "name" => "Supreme Meats Sandwich",
            "image" => "subway_supreme_meats_sandwich.jpg",
            "price" => 5.99,
            "category_id" => 11,
            "restaurant_id" => 4
        ],
        [ // Domino's Pizza
            "name" => "3 Meats",
            "image" => "dominos_3_meats.jpg",
            "price" => 8.99,
            "category_id" => 1,
            "restaurant_id" => 3
        ],
        [
            "name" => "7up",
            "image" => "dominos_7up.jpg",
            "price" => 1.99,
            "category_id" => 10,
            "restaurant_id" => 3
        ],
        [
            "name" => "Boneless Chicken Tenders",
            "image" => "dominos_boneless_chicken_tenders.jpg",
            "price" => 3.99,
            "category_id" => 6,
            "restaurant_id" => 3
        ],
        [
            "name" => "Buttermilk Chicken Pieces",
            "image" => "dominos_buttermilk_chicken_pieces.jpg",
            "price" => 4.99,
            "category_id" => 6,
            "restaurant_id" => 3
        ],
        [
            "name" => "Chicken Supreme",
            "image" => "dominos_chicken_supreme.jpg",
            "price" => 8.99,
            "category_id" => 1,
            "restaurant_id" => 3
        ],
        [
            "name" => "Choc Lava Cake",
            "image" => "dominos_choc_lava_cake.jpg",
            "price" => 5.99,
            "category_id" => 4,
            "restaurant_id" => 3
        ],
        [
            "name" => "Choc Lava Puff Roll",
            "image" => "dominos_choc_lava_puff_roll.jpg",
            "price" => 4.99,
            "category_id" => 4,
            "restaurant_id" => 3
        ],
        [
            "name" => "Double Bacon Cheeseburger",
            "image" => "dominos_double_bacon_cheeseburger.jpg",
            "price" => 8.99,
            "category_id" => 1,
            "restaurant_id" => 3
        ],
        [
            "name" => "Fire Breather",
            "image" => "dominos_fire_breather.jpg",
            "price" => 7.99,
            "category_id" => 1,
            "restaurant_id" => 3
        ],
        [
            "name" => "Garlic Bread",
            "image" => "dominos_garlic_bread.jpg",
            "price" => 2.99,
            "category_id" => 3,
            "restaurant_id" => 3
        ],
        [
            "name" => "Godfather",
            "image" => "dominos_godfather.jpg",
            "price" => 7.99,
            "category_id" => 1,
            "restaurant_id" => 3
        ],
        [
            "name" => "Oven Baked Chips",
            "image" => "dominos_oven_baked_chips.jpg",
            "price" => 7.99,
            "category_id" => 3,
            "restaurant_id" => 3
        ],
        [
            "name" => "Pepperoni",
            "image" => "dominos_pepperoni.jpg",
            "price" => 7.99,
            "category_id" => 1,
            "restaurant_id" => 3
        ],
        [
            "name" => "Pepsi",
            "image" => "dominos_pepsi.jpg",
            "price" => 1.99,
            "category_id" => 10,
            "restaurant_id" => 3
        ],
        [
            "name" => "Vanilla Custard Puff Roll",
            "image" => "dominos_vanilla_custard_puff_roll.jpg",
            "price" => 4.99,
            "category_id" => 4,
            "restaurant_id" => 3
        ],
        [ // Papa John's
            "name" => "All The Meats",
            "image" => "papa_johns_all_the_meats.jpg",
            "price" => 8.99,
            "category_id" => 1,
            "restaurant_id" => 6
        ],
        [
            "name" => "Breadsticks",
            "image" => "papa_johns_breadsticks.jpg",
            "price" => 2.99,
            "category_id" => 3,
            "restaurant_id" => 6
        ],
        [
            "name" => "Cheese",
            "image" => "papa_johns_cheese.jpg",
            "price" => 6.99,
            "category_id" => 1,
            "restaurant_id" => 6
        ],
        [
            "name" => "Cheesesticks",
            "image" => "papa_johns_cheesesticks.jpg",
            "price" => 2.99,
            "category_id" => 3,
            "restaurant_id" => 6
        ],
        [
            "name" => "Chicken Florentine Pasta",
            "image" => "papa_johns_chicken_florentine_pasta.jpg",
            "price" => 7.99,
            "category_id" => 15,
            "restaurant_id" => 6
        ],
        [
            "name" => "Chocolate Chip Cookie",
            "image" => "papa_johns_chocolate_chip_cookie.jpg",
            "price" => 2.99,
            "category_id" => 4,
            "restaurant_id" => 6
        ],
        [
            "name" => "Cinnamon Pullaparts",
            "image" => "papa_johns_cinnamon_pullaparts.jpg",
            "price" => 3.99,
            "category_id" => 4,
            "restaurant_id" => 6
        ],
        [
            "name" => "Creamy Red Sauce Pasta With Italian Sausage",
            "image" => "papa_johns_creamy_red_sauce_pasta_with_italian_sausage.jpg",
            "price" => 9.99,
            "category_id" => 15,
            "restaurant_id" => 6
        ],
        [
            "name" => "Garden Fresh",
            "image" => "papa_johns_garden_fresh.jpg",
            "price" => 6.99,
            "category_id" => 1,
            "restaurant_id" => 6
        ],
        [
            "name" => "Hawaiian",
            "image" => "papa_johns_hawaiian.jpg",
            "price" => 6.99,
            "category_id" => 1,
            "restaurant_id" => 6
        ],
        [
            "name" => "Pepperoni",
            "image" => "papa_johns_pepperoni.jpg",
            "price" => 7.99,
            "category_id" => 1,
            "restaurant_id" => 6
        ],
        [
            "name" => "Pepsi - 2l Bottle",
            "image" => "papa_johns_pepsi_2l.jpg",
            "price" => 3.49,
            "category_id" => 10,
            "restaurant_id" => 6
        ],
        [
            "name" => "Pepsi - 500ml Bottle",
            "image" => "papa_johns_pepsi_500ml.jpg",
            "price" => 1.99,
            "category_id" => 10,
            "restaurant_id" => 6
        ],
        [
            "name" => "Sausage and Bacon Supreme",
            "image" => "papa_johns_sausage_and_bacon_supreme.jpg",
            "price" => 8.99,
            "category_id" => 1,
            "restaurant_id" => 6
        ],
        [
            "name" => "The Works",
            "image" => "papa_johns_the_works.jpg",
            "price" => 8.99,
            "category_id" => 1,
            "restaurant_id" => 6
        ],
        [ // Chick-fil-a
            "name" => "Barbeque Sauce",
            "image" => "chickfila_barbeque_sauce.jpg",
            "price" => 1.99,
            "category_id" => 14,
            "restaurant_id" => 5
        ],
        [
            "name" => "Chicken Biscuit",
            "image" => "chickfila_chicken_biscuit.jpg",
            "price" => 2.99,
            "category_id" => 9,
            "restaurant_id" => 5
        ],
        [
            "name" => "Chicken Sandwich",
            "image" => "chickfila_chicken_sandwich.jpg",
            "price" => 3.99,
            "category_id" => 11,
            "restaurant_id" => 5
        ],
        [
            "name" => "Chick-Fil-A Sauce",
            "image" => "chickfila_chick-fil-a_sauce.jpg",
            "price" => 1.99,
            "category_id" => 14,
            "restaurant_id" => 5
        ],
        [
            "name" => "Chick-n-Strips",
            "image" => "chickfila_chick-n-strips.jpg",
            "price" => 3.99,
            "category_id" => 6,
            "restaurant_id" => 5
        ],
        [
            "name" => "Cobb Salad",
            "image" => "chickfila_cobb_salad.jpg",
            "price" => 3.99,
            "category_id" => 12,
            "restaurant_id" => 5
        ],
        [
            "name" => "Coca-Cola",
            "image" => "chickfila_coca-cola.jpg",
            "price" => 2.99,
            "category_id" => 10,
            "restaurant_id" => 5
        ],
        [
            "name" => "Cool Wrap",
            "image" => "chickfila_cool_wrap.jpg",
            "price" => 3.99,
            "category_id" => 13,
            "restaurant_id" => 5
        ],
        [
            "name" => "Deluxe Sandwich",
            "image" => "chickfila_deluxe_sandwich.jpg",
            "price" => 4.49,
            "category_id" => 11,
            "restaurant_id" => 5
        ],
        [
            "name" => "Dr Pepper",
            "image" => "chickfila_dr_pepper.jpg",
            "price" => 2.99,
            "category_id" => 10,
            "restaurant_id" => 5
        ],
        [
            "name" => "Egg White Grill",
            "image" => "chickfila_egg_white_grill.jpg",
            "price" => 2.49,
            "category_id" => 9,
            "restaurant_id" => 5
        ],
        [
            "name" => "Fruit Cup",
            "image" => "chickfila_fruit_cup.jpg",
            "price" => 2.49,
            "category_id" => 3,
            "restaurant_id" => 5
        ],
        [
            "name" => "Grilled Chicken Sandwich",
            "image" => "chickfila_grilled_chicken_sandwich.jpg",
            "price" => 4.49,
            "category_id" => 11,
            "restaurant_id" => 5
        ],
        [
            "name" => "Hash Brown Scramble Bowl",
            "image" => "chickfila_hash_brown_scramble_bowl.jpg",
            "price" => 2.99,
            "category_id" => 9,
            "restaurant_id" => 5
        ],
        [
            "name" => "Nuggets",
            "image" => "chickfila_nuggets.jpg",
            "price" => 3.99,
            "category_id" => 6,
            "restaurant_id" => 5
        ],
        [
            "name" => "Spicy Chicken Sandwich",
            "image" => "chickfila_spicy_chicken_sandwich.jpg",
            "price" => 3.99,
            "category_id" => 11,
            "restaurant_id" => 5
        ],
        [
            "name" => "Spicy Deluxe Sandwich",
            "image" => "chickfila_spicy_deluxe_sandwich.jpg",
            "price" => 4.49,
            "category_id" => 11,
            "restaurant_id" => 5
        ],
        [
            "name" => "Spicy Southwest Salad",
            "image" => "chickfila_spicy_southwest_salad.jpg",
            "price" => 3.99,
            "category_id" => 12,
            "restaurant_id" => 5
        ],
        [
            "name" => "Waffle Potato Fries",
            "image" => "chickfila_waffle_potato_fries.jpg",
            "price" => 2.99,
            "category_id" => 3,
            "restaurant_id" => 5
        ],
        [ // Starbucks
            "name" => "Bacon, Gouda & Egg Sandwich",
            "image" => "starbucks_bacon_gouda_&_egg_sandwich.jpg",
            "price" => 2.99,
            "category_id" => 9,
            "restaurant_id" => 8
        ],
        [
            "name" => "Caffe Americano",
            "image" => "starbucks_caffe_americano.jpg",
            "price" => 3.99,
            "category_id" => 5,
            "restaurant_id" => 8
        ],
        [
            "name" => "Caffe Latte",
            "image" => "starbucks_caffe_latte.jpg",
            "price" => 4.99,
            "category_id" => 5,
            "restaurant_id" => 8
        ],
        [
            "name" => "Caffe Misto",
            "image" => "starbucks_caffe_misto.jpg",
            "price" => 4.99,
            "category_id" => 5,
            "restaurant_id" => 8
        ],
        [
            "name" => "Caffe Mocha",
            "image" => "starbucks_caffe_mocha.jpg",
            "price" => 4.99,
            "category_id" => 5,
            "restaurant_id" => 8
        ],
        [
            "name" => "Cappuccino",
            "image" => "starbucks_cappuccino.jpg",
            "price" => 4.49,
            "category_id" => 5,
            "restaurant_id" => 8
        ],
        [
            "name" => "Caramel Macchiato",
            "image" => "starbucks_caramel_macchiato.jpg",
            "price" => 5.99,
            "category_id" => 5,
            "restaurant_id" => 8
        ],
        [
            "name" => "Cinnamon Dolce Latte",
            "image" => "starbucks_cinnamon_dolce_latte.jpg",
            "price" => 4.99,
            "category_id" => 5,
            "restaurant_id" => 8
        ],
        [
            "name" => "Crispy Grilled Cheese on Sourdough",
            "image" => "starbucks_crispy_grilled_cheese_on_sourdough.jpg",
            "price" => 4.99,
            "category_id" => 11,
            "restaurant_id" => 8
        ],
        [
            "name" => "Double-Smoked Bacon, Cheddar & Egg Sandwich",
            "image" => "starbucks_double-smoked_bacon_cheddar_&_egg_sandwich.jpg",
            "price" => 3.99,
            "category_id" => 9,
            "restaurant_id" => 8
        ],
        [
            "name" => "Ham & Swiss on Baguette",
            "image" => "starbucks_ham_&_swiss_on_baguette.jpg",
            "price" => 4.99,
            "category_id" => 11,
            "restaurant_id" => 8
        ],
        [
            "name" => "Impossible Breakfast Sandwich",
            "image" => "starbucks_impossible_breakfast_sandwich.jpg",
            "price" => 3.99,
            "category_id" => 9,
            "restaurant_id" => 8
        ],
        [
            "name" => "Spinach, Feta & Egg White Wrap",
            "image" => "starbucks_spinach_feta_&_egg_white_wrap.jpg",
            "price" => 3.99,
            "category_id" => 9,
            "restaurant_id" => 8
        ],
        [
            "name" => "White Chocolate Mocha",
            "image" => "starbucks_white_chocolate_mocha.jpg",
            "price" => 5.99,
            "category_id" => 5,
            "restaurant_id" => 8
        ],
        [ // Chipotle
            "name" => "Blackberry Izze",
            "image" => "chipotle_blackberry_izze.jpg",
            "price" => 1.99,
            "category_id" => 10,
            "restaurant_id" => 9
        ],
        [
            "name" => "Burrito",
            "image" => "chipotle_burrito.jpg",
            "price" => 10.99,
            "category_id" => 7,
            "restaurant_id" => 9
        ],
        [
            "name" => "Burrito Bowl",
            "image" => "chipotle_burrito_bowl.jpg",
            "price" => 12.99,
            "category_id" => 7,
            "restaurant_id" => 9
        ],
        [
            "name" => "Chips & Guacamole",
            "image" => "chipotle_chips_&_guacamole.jpg",
            "price" => 4.99,
            "category_id" => 3,
            "restaurant_id" => 9
        ],
        [
            "name" => "Chips & Gueso Blanco",
            "image" => "chipotle_chips_&_queso_blanco.jpg",
            "price" => 4.99,
            "category_id" => 3,
            "restaurant_id" => 9
        ],
        [
            "name" => "Guacamole",
            "image" => "chipotle_guacamole.jpg",
            "price" => 2.99,
            "category_id" => 14,
            "restaurant_id" => 9
        ],
        [
            "name" => "High Protein Bowl",
            "image" => "chipotle_high_protein_bowl.jpg",
            "price" => 11.99,
            "category_id" => 12,
            "restaurant_id" => 9
        ],
        [
            "name" => "Keto Salad Bowl",
            "image" => "chipotle_keto_salad_bowl.jpg",
            "price" => 11.99,
            "category_id" => 12,
            "restaurant_id" => 9
        ],
        [
            "name" => "Kid's Quesadilla",
            "image" => "chipotle_kids_quesadilla.jpg",
            "price" => 8.99,
            "category_id" => 7,
            "restaurant_id" => 9
        ],
        [
            "name" => "Mexical Coca-Cola",
            "image" => "chipotle_mexican_coca-cola.jpg",
            "price" => 1.99,
            "category_id" => 10,
            "restaurant_id" => 9
        ],
        [
            "name" => "Mexican Sprite",
            "image" => "chipotle_mexican_sprite.jpg",
            "price" => 1.99,
            "category_id" => 10,
            "restaurant_id" => 9
        ],
        [
            "name" => "Quesadilla",
            "image" => "chipotle_quesadilla.jpg",
            "price" => 10.99,
            "category_id" => 7,
            "restaurant_id" => 9
        ],
        [
            "name" => "Queso Blanco",
            "image" => "chipotle_queso_blanco.jpg",
            "price" => 2.99,
            "category_id" => 14,
            "restaurant_id" => 9
        ],
        [
            "name" => "Tacos",
            "image" => "chipotle_tacos.jpg",
            "price" => 6.99,
            "category_id" => 7,
            "restaurant_id" => 9
        ],
        [
            "name" => "Whole30 Salad Bowl",
            "image" => "chipotle_whole30_salad_bowl.jpg",
            "price" => 11.99,
            "category_id" => 12,
            "restaurant_id" => 9
        ],
        [ // Dunkin' Donuts
            "name" => "Americano",
            "image" => "dunkindonuts_americano.jpg",
            "price" => 6.99,
            "category_id" => 5,
            "restaurant_id" => 7
        ],
        [
            "name" => "Bacon, Egg & Cheese",
            "image" => "dunkindonuts_bacon_egg_&_cheese.jpg",
            "price" => 6.99,
            "category_id" => 9,
            "restaurant_id" => 7
        ],
        [
            "name" => "Cappuccino",
            "image" => "dunkindonuts_cappuccino.jpg",
            "price" => 5.99,
            "category_id" => 5,
            "restaurant_id" => 7
        ],
        [
            "name" => "Coffe",
            "image" => "dunkindonuts_coffe.jpg",
            "price" => 5.99,
            "category_id" => 5,
            "restaurant_id" => 7
        ],
        [
            "name" => "Donut",
            "image" => "dunkindonuts_donut.jpg",
            "price" => 4.99,
            "category_id" => 4,
            "restaurant_id" => 7
        ],
        [
            "name" => "Egg & Cheese",
            "image" => "dunkindonuts_egg_&_cheese.jpg",
            "price" => 5.99,
            "category_id" => 9,
            "restaurant_id" => 7
        ],
        [
            "name" => "Iced Americano",
            "image" => "dunkindonuts_iced_americano.jpg",
            "price" => 6.99,
            "category_id" => 5,
            "restaurant_id" => 7
        ],
        [
            "name" => "Iced Coffe",
            "image" => "dunkindonuts_iced_coffe.jpg",
            "price" => 5.99,
            "category_id" => 5,
            "restaurant_id" => 7
        ],
        [
            "name" => "Latte",
            "image" => "dunkindonuts_latte.jpg",
            "price" => 6.99,
            "category_id" => 5,
            "restaurant_id" => 7
        ],
        [
            "name" => "Macchiato",
            "image" => "dunkindonuts_macchiato.jpg",
            "price" => 6.99,
            "category_id" => 5,
            "restaurant_id" => 7
        ],
        [
            "name" => "Munchkins Donut Hole Treats",
            "image" => "dunkindonuts_munchkins_donut_hole_treats.jpg",
            "price" => 5.99,
            "category_id" => 4,
            "restaurant_id" => 7
        ],
        [
            "name" => "Sausage, Egg & Cheese",
            "image" => "dunkindonuts_sausage_egg_&_cheese.jpg",
            "price" => 6.99,
            "category_id" => 9,
            "restaurant_id" => 7
        ],
        [
            "name" => "Wake-Up Wrap",
            "image" => "dunkindonuts_wake-up_wrap.jpg",
            "price" => 4.99,
            "category_id" => 9,
            "restaurant_id" => 7
        ],
        [ // Little Caesars
            "name" => "3 Meat Treat",
            "image" => "littlecaesars_3_meat_treat.jpg",
            "price" => 10.99,
            "category_id" => 1,
            "restaurant_id" => 10
        ],
        [
            "name" => "4-N-1 Pizza",
            "image" => "littlecaesars_4-n-1_pizza.jpg",
            "price" => 11.99,
            "category_id" => 1,
            "restaurant_id" => 10
        ],
        [
            "name" => "Caesar Wings",
            "image" => "littlecaesars_caesar_wings.jpg",
            "price" => 5.99,
            "category_id" => 6,
            "restaurant_id" => 10
        ],
        [
            "name" => "Cheese",
            "image" => "littlecaesars_cheese.jpg",
            "price" => 9.99,
            "category_id" => 1,
            "restaurant_id" => 10
        ],
        [
            "name" => "Coca-Cola - 2l Bottle",
            "image" => "littlecaesars_coca-cola_2l_bottle.jpg",
            "price" => 2.99,
            "category_id" => 10,
            "restaurant_id" => 10
        ],
        [
            "name" => "Complete Meal",
            "image" => "littlecaesars_complete_meal.jpg",
            "price" => 14.99,
            "category_id" => 8,
            "restaurant_id" => 10
        ],
        [
            "name" => "Crazy Combo",
            "image" => "littlecaesars_crazy_combo.jpg",
            "price" => 2.99,
            "category_id" => 8,
            "restaurant_id" => 10
        ],
        [
            "name" => "Fun Meal",
            "image" => "littlecaesars_fun_meal.jpg",
            "price" => 17.99,
            "category_id" => 8,
            "restaurant_id" => 10
        ],
        [
            "name" => "Hula Hawaiian",
            "image" => "littlecaesars_hula_hawaiian.jpg",
            "price" => 10.99,
            "category_id" => 1,
            "restaurant_id" => 10
        ],
        [
            "name" => "Party Meal",
            "image" => "littlecaesars_party_meal.jpg",
            "price" => 20.99,
            "category_id" => 8,
            "restaurant_id" => 10
        ],
        [
            "name" => "Pepperoni",
            "image" => "littlecaesars_pepperoni.jpg",
            "price" => 9.99,
            "category_id" => 1,
            "restaurant_id" => 10
        ],
        [
            "name" => "The Batman Pizza",
            "image" => "littlecaesars_the_batman_pizza.jpg",
            "price" => 11.99,
            "category_id" => 1,
            "restaurant_id" => 10
        ],
        [
            "name" => "Ultimate Supreme",
            "image" => "littlecaesars_ultimate_supreme.jpg",
            "price" => 10.99,
            "category_id" => 1,
            "restaurant_id" => 10
        ],
        [
            "name" => "Veggie",
            "image" => "littlecaesars_veggie.jpg",
            "price" => 10.99,
            "category_id" => 1,
            "restaurant_id" => 10
        ]
    ];

    public function run()
    {
        foreach($this->food as $f) {
            $f['created_at'] = now();
            \DB::table("food")->insert($f);
        }
    }
}
