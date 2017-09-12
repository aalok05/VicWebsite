<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ideas extends Model
{
    protected $table='idea';

    public $fillable = ['Name','FatherName','MotherName','Education','Education','Address','City','Pincode',
    'MobileNumber','DOB','Sex','Nationality','PanNumber','AadharNumber','VoterNumber','DrivingNumber','PassportNumber',
    'Website','TechnicalAssociation','ProfessionalActivities','SeasonalActivityMarketing','SeasonalActivityIndustrial','SeasonalActivityEntrepreneurial','SeasonalActivityBusiness',
    'SeasonalActivityRD','TechnologyBusinessPreference','BasicIdea','Strengths','Challenges','Opportunity',
    'Threats','EntityType','StartDate','NameOfCompany','CompanyAddress','CompanyPincode','DateofIncorporation','SECRegistrationNo',
    'CompanyPAN','CompanyTIN','CompanyPartners','ContactPerson','CompanyContactNumber','ContactTime','Technologies',
    'TargetMarket','IdenticalBusiness','SupportExpected','SpaceRequired','NumberOfEmployees','SupportServices','FellowshipUniversityName',
    'FellowshipDepartmentName','FellowshipProfessorIncharge','FellowshipResearchAreas','FellowshiplicensedAnyTechnology',
      'FellowshipApplicationAreas','FellowshipWorkingPrototype','FellowshipDemonstrable','FellowshipIsknowledge','FellowshipMaintainRecords'];


}