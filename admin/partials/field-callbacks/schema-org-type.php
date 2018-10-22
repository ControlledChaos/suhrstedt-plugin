<?php
/**
 * SCallback for the Schema organization type field.
 *
 * @package    Tim_Suhrstedt
 * @subpackage Admin\Partials\Field_Callbacks
 *
 * @since      1.0.0
 * @author     Greg Sweet <greg@ccdzine.com>
 */

namespace TimS_Plugin\Admin\Partials\Field_Callbacks;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

$types = [

	// First option save null.
	null          => __( 'Select one&hellip;', 'tims' ),
	'Airline'     => __( 'Airline', 'tims' ),
	'Corporation' => __( 'Corporation', 'tims' ),

	// Educational Organizations.
	'EducationalOrganization' => __( 'Educational Organization', 'tims' ),
		'CollegeOrUniversity' => __( '— College or University', 'tims' ),
		'ElementarySchool'    => __( '— Elementary School', 'tims' ),
		'HighSchool'          => __( '— High School', 'tims' ),
		'MiddleSchool'        => __( '— Middle School', 'tims' ),
		'Preschool'           => __( '— Preschool', 'tims' ),
		'School'              => __( '— School', 'tims' ),

	'GovernmentOrganization'  => __( 'Government Organization', 'tims' ),

	// Local Businesses.
	'LocalBusiness' => __( 'Local Business', 'tims' ),
		'AnimalShelter' => __( '— Animal Shelter', 'tims' ),

		// Automotive Businesses.
		'AutomotiveBusiness' => __( '— Automotive Business', 'tims' ),
			'AutoBodyShop'     => __( '—— Auto Body Shop', 'tims' ),
			'AutoDealer'       => __( '—— Auto Dealer', 'tims' ),
			'AutoPartsStore'   => __( '—— Auto Parts Store', 'tims' ),
			'AutoRental'       => __( '—— Auto Rental', 'tims' ),
			'AutoRepair'       => __( '—— Auto Repair', 'tims' ),
			'AutoWash'         => __( '—— Auto Wash', 'tims' ),
			'GasStation'       => __( '—— Gas Station', 'tims' ),
			'MotorcycleDealer' => __( '—— Motorcycle Dealer', 'tims' ),
			'MotorcycleRepair' => __( '—— Motorcycle Repair', 'tims' ),

		'ChildCare'            => __( '— Child Care', 'tims' ),
		'Dentist'              => __( '— Dentist', 'tims' ),
		'DryCleaningOrLaundry' => __( '— Dry Cleaning or Laundry', 'tims' ),

		// Emergency Services.
		'EmergencyService' => __( '— Emergency Service', 'tims' ),
			'FireStation'   => __( '—— Fire Station', 'tims' ),
			'Hospital'      => __( '—— Hospital', 'tims' ),
			'PoliceStation' => __( '—— Police Station', 'tims' ),

		'EmploymentAgency' => __( '— Employment Agency', 'tims' ),

		// Entertainment Businesses.
		'EntertainmentBusiness' => __( '— Entertainment Business', 'tims' ),
			'AdultEntertainment' => __( '—— Adult Entertainment', 'tims' ),
			'AmusementPark'      => __( '—— Amusement Park', 'tims' ),
			'ArtGallery'         => __( '—— Art Gallery', 'tims' ),
			'Casino'             => __( '—— Casino', 'tims' ),
			'ComedyClub'         => __( '—— Comedy Club', 'tims' ),
			'MovieTheater'       => __( '—— Movie Theater', 'tims' ),
			'NightClub'          => __( '—— Night Club', 'tims' ),

		// Financial Services.
		'FinancialService' => __( '— Financial Service', 'tims' ),
			'AccountingService' => __( '—— Accounting Service', 'tims' ),
			'AutomatedTeller'   => __( '—— Automated Teller', 'tims' ),
			'BankOrCreditUnion' => __( '—— Bank or Credit Union', 'tims' ),
			'InsuranceAgency'   => __( '—— Insurance Agency', 'tims' ),

		// Food Establishments.
		'FoodEstablishment' => __( '— Food Establishment', 'tims' ),
			'Bakery'             => __( '—— Bakery', 'tims' ),
			'BarOrPub'           => __( '—— Bar or Pub', 'tims' ),
			'Brewery'            => __( '—— Brewery', 'tims' ),
			'CafeOrCoffeeShop'   => __( '—— Cafe or Coffee Shop', 'tims' ),
			'FastFoodRestaurant' => __( '—— Fast Food Restaurant', 'tims' ),
			'IceCreamShop'       => __( '—— Ice Cream Shop', 'tims' ),
			'Restaurant'         => __( '—— Restaurant', 'tims' ),
			'Winery'             => __( '—— Winery', 'tims' ),

		// Government Offices.
		'GovernmentOffice' => __( '— Government Office', 'tims' ),
			'PostOffice' => __( '—— Post Office', 'tims' ),

		// Health and Beauty Businesses.
		'HealthAndBeautyBusiness' => __( '— Health and Beauty Business', 'tims' ),
			'BeautySalon'  => __( '—— Beauty Salon', 'tims' ),
			'DaySpa'       => __( '—— Day Spa', 'tims' ),
			'HairSalon'    => __( '—— Hair Salon', 'tims' ),
			'HealthClub'   => __( '—— Health Club', 'tims' ),
			'NailSalon'    => __( '—— Nail Salon', 'tims' ),
			'TattooParlor' => __( '—— Tattoo Parlor', 'tims' ),

		// Home and Construction Businesses.
		'HomeAndConstructionBusiness' => __( '— Home and Construction Business', 'tims' ),
			'Electrician'       => __( '—— Electrician', 'tims' ),
			'GeneralContractor' => __( '—— General Contractor', 'tims' ),
			'HVACBusiness'      => __( '—— HVAC Business', 'tims' ),
			'HousePainter'      => __( '—— House Painter', 'tims' ),
			'Locksmith'         => __( '—— Locksmith', 'tims' ),
			'MovingCompany'     => __( '—— MovingCompany', 'tims' ),
			'Plumber'           => __( '—— Plumber', 'tims' ),
			'RoofingContractor' => __( '—— Roofing Contractor', 'tims' ),

		'InternetCafe' => __( '— Internet Cafe', 'tims' ),

		// Legal Services.
		'LegalService' => __( '— Legal Service', 'tims' ),
			'Attorney' => __( '—— Attorney', 'tims' ),
			'Notary'   => __( '—— Notary', 'tims' ),

		'Library' => __( '— Library', 'tims' ),

		// Lodging Businesses.
		'LodgingBusiness' => __( '— Lodging Business', 'tims' ),
			'BedAndBreakfast' => __( '—— Bed and Breakfast', 'tims' ),
			'Campground'      => __( '—— Campground', 'tims' ),
			'Hostel'          => __( '—— Hostel', 'tims' ),
			'Hotel'           => __( '—— Hotel', 'tims' ),
			'Motel'           => __( '—— Motel', 'tims' ),
			'Resort'          => __( '—— Resort', 'tims' ),

		'ProfessionalService' => __( '— Professional Service', 'tims' ),
		'RadioStation'        => __( '— Radio Station', 'tims' ),
		'RealEstateAgent'     => __( '— Real Estate Agent', 'tims' ),
		'RecyclingCenter'     => __( '— Recycling Center', 'tims' ),
		'SelfStorage'         => __( '— Self Storage', 'tims' ),
		'ShoppingCenter'      => __( '— Shopping Center', 'tims' ),

		// Sports Activity Locations.
		'SportsActivityLocation' => __( '— Sports Activity Location', 'tims' ),
			'BowlingAlley'       => __( '—— Bowling Alley', 'tims' ),
			'ExerciseGym'        => __( '—— Exercise Gym', 'tims' ),
			'GolfCourse'         => __( '—— Golf Course', 'tims' ),
			'HealthClub'         => __( '—— Health Club', 'tims' ),
			'PublicSwimmingPool' => __( '—— Public Swimming Pool', 'tims' ),
			'SkiResort'          => __( '—— Ski Resort', 'tims' ),
			'SportsClub'         => __( '—— Sports Club', 'tims' ),
			'StadiumOrArena'     => __( '—— Stadium or Arena', 'tims' ),
			'TennisComplex'      => __( '—— Tennis Complex', 'tims' ),

		// Store types.
		'Store' => __( '— Store', 'tims' ),
			'AutoPartsStore'      => __( '—— Auto Parts Store', 'tims' ),
			'BikeStore'           => __( '—— Bike Store', 'tims' ),
			'BookStore'           => __( '—— Book Store', 'tims' ),
			'ClothingStore'       => __( '—— Clothing Store', 'tims' ),
			'ComputerStore'       => __( '—— Computer Store', 'tims' ),
			'ConvenienceStore'    => __( '—— Convenience Store', 'tims' ),
			'DepartmentStore'     => __( '—— Department Store', 'tims' ),
			'ElectronicsStore'    => __( '—— Electronics Store', 'tims' ),
			'Florist'             => __( '—— Florist', 'tims' ),
			'FurnitureStore'      => __( '—— Furniture Store', 'tims' ),
			'GardenStore'         => __( '—— Garden Store', 'tims' ),
			'GroceryStore'        => __( '—— Grocery Store', 'tims' ),
			'HardwareStore'       => __( '—— Hardware Store', 'tims' ),
			'HobbyShop'           => __( '—— Hobby Shop', 'tims' ),
			'HomeGoodsStore'      => __( '—— Home Goods Store', 'tims' ),
			'JewelryStore'        => __( '—— Jewelry Store', 'tims' ),
			'LiquorStore'         => __( '—— Liquor Store', 'tims' ),
			'MensClothingStore'   => __( '—— Mens Clothing Store', 'tims' ),
			'MobilePhoneStore'    => __( '—— Mobile Phone Store', 'tims' ),
			'MovieRentalStore'    => __( '—— Movie Rental Store', 'tims' ),
			'MusicStore'          => __( '—— Music Store', 'tims' ),
			'OfficeEquipmentStore'=> __( '—— Office Equipment Store', 'tims' ),
			'OutletStore'         => __( '—— Outlet Store', 'tims' ),
			'PawnShop'            => __( '—— Pawn Shop', 'tims' ),
			'PetStore'            => __( '—— Pet Store', 'tims' ),
			'ShoeStore'           => __( '—— Shoe Store', 'tims' ),
			'SportingGoodsStore'  => __( '—— Sporting Goods Store', 'tims' ),
			'TireShop'            => __( '—— Tire Shop', 'tims' ),
			'ToyStore'            => __( '—— Toy Store', 'tims' ),
			'WholesaleStore'      => __( '—— Wholesale Store', 'tims' ),

		'TelevisionStation'        => __( '— Television Station', 'tims' ),
		'TouristInformationCenter' => __( '— Tourist Information Center', 'tims' ),
		'TravelAgency'             => __( '— Travel Agency', 'tims' ),

	'MedicalOrganization' => __( 'Medical Organization', 'tims' ),
	'NGO'                 => __( 'NGO (Non-Governmental Organization', 'tims' ),
	'PerformingGroup'     => __( 'Performing Group', 'tims' ),
	'SportsOrganization'  => __( 'Sports Organization', 'tims' )
];

$options = get_option( 'schema_org_type' );

$html = '<p><select id="schema_org_type" name="schema_org_type">';

foreach( $types as $type => $value ) {

	$selected = ( $options == $type ) ? 'selected="' . esc_attr( 'selected' ) . '"' : '';

	$html .= '<option value="' . esc_attr( $type ) . '" ' . $selected . '>' . esc_html( $value ) . '</option>';

}

$html .= '</select>';
$html .= sprintf(
	'<label for="schema_org_type"> %1s</label> <a href="%2s" target="_blank" class="tooltip" title="%3s"><span class="dashicons dashicons-editor-help"></span></a>',
	$args[0],
	esc_attr( esc_url( 'https://schema.org/docs/full.html#C.Organization' ) ),
	esc_attr( __( 'Read documentation for organization types', 'tims' ) )
);
$html .= '</p>';

echo $html;