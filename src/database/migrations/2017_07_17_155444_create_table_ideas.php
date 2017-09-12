<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableIdeas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('idea', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('Name');
            $table->string('Fathername');
            $table->string('MotherName');
            $table->string('Education');
            $table->string('Email');
            $table->longText('Address');
            $table->string('City');
            $table->string('Pincode');
            $table->string('MobileNumber');
            $table->date('DOB');
            $table->string('Sex');
            $table->string('Nationality');
            $table->string('PanNumber');
            $table->string('AadharNumber');
            $table->string('VoterNumber');
            $table->string('DrivingNumber');
            $table->string('PassportNumber');
            $table->string('Website');
            $table->longText('TechnicalAssociation');
            $table->longText('ProfessionalActivities');
            $table->longText('SeasonalActivityMarketing');
            $table->longText('SeasonalActivityIndustrial');
            $table->longText('SeasonalActivityEntrepreneurial');
            $table->longText('SeasonalActivityBusiness');
            $table->longText('SeasonalActivityRD');
            $table->longText('TechnologyBusinessPreference');
            $table->longText('BasicIdea');
            $table->longText('Strengths');
            $table->longText('Challenges');
            $table->longText('Opportunity');
            $table->longText('Threats');
            $table->string('EntityType');
            $table->date('StartDate');
            $table->string('NameOfCompany')->default('NULL');
            $table->longText('CompanyAddress')->nullable;
            $table->string('CompanyCity')->default('NULL');
            $table->string('CompanyPincode')->default('NULL');
            $table->date('DateofIncorporation')->nullable()->default(null);
            $table->string('SECRegistrationNo')->default('NULL');
            $table->string('CompanyPAN')->default('NULL');
            $table->string('CompanyTIN')->default('NULL');
            $table->longText('CompanyPartners')->nullable()->default(null);
            $table->string('ContactPerson')->default('NULL');
            $table->string('CompanyContactNumber')->default('NULL');
            $table->string('ContactTime')->default('NULL');
            $table->longText('Technologies')->nullable()->default(null);
            $table->longText('TargetMarket')->nullable()->default(null);
            $table->longText('IdenticalBusiness')->nullable()->default(null);
            $table->longText('SupportExpected')->nullable()->default(null);
            $table->string('SpaceRequired')->default('NULL');
            $table->string('NumberOfEmployees')->default('NULL');
            $table->longText('SupportServices')->nullable()->default(null);
            $table->string('FellowshipUniversityName')->default('NULL');
            $table->string('FellowshipDepartmentName')->default('NULL');
            $table->string('FellowshipProfessorIncharge')->default('NULL');
            $table->longText('FellowshipResearchAreas')->nullable()->default(null);
            $table->string('FellowshiplicensedAnyTechnology')->default('NULL');
            $table->string('FellowshipApplicationBasedProject')->default('NULL');
            $table->string('FellowshipApplicationAreas')->default('NULL');
            $table->string('FellowshipWorkingPrototype')->default('NULL');
            $table->string('FellowshipDemonstrable')->default('NULL');
            $table->string('FellowshipIsknowledge')->default('NULL');
            $table->longText('FellowshipMaintainRecords')->nullable()->default(null);
            //$table->string('slug');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::drop('idea');
    }
}
/*
CREATE TABLE `ideas` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `user_id` int(11) DEFAULT NULL,
 `title` varchar(255) DEFAULT NULL,
 `body` varchar(255) DEFAULT NULL,
 `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
 `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
 `slug` varchar(255) DEFAULT NULL,
 `college` varchar(255) DEFAULT NULL,
 PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1

*/