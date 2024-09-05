<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v16/services/geo_target_constant_service.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V16\Services;

class GeoTargetConstantService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Api\LaunchStage::initOnce();
        \GPBMetadata\Google\Api\Http::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Protobuf\Duration::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
?google/ads/googleads/v16/enums/geo_target_constant_status.protogoogle.ads.googleads.v16.enums"x
GeoTargetConstantStatusEnum"Y
GeoTargetConstantStatus
UNSPECIFIED 
UNKNOWN
ENABLED
REMOVAL_PLANNEDB�
"com.google.ads.googleads.v16.enumsBGeoTargetConstantStatusProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v16/enums;enums�GAA�Google.Ads.GoogleAds.V16.Enums�Google\\Ads\\GoogleAds\\V16\\Enums�"Google::Ads::GoogleAds::V16::Enumsbproto3
�
<google/ads/googleads/v16/resources/geo_target_constant.proto"google.ads.googleads.v16.resourcesgoogle/api/field_behavior.protogoogle/api/resource.proto"�
GeoTargetConstantI
resource_name (	B2�A�A,
*googleads.googleapis.com/GeoTargetConstant
id
 (B�AH �
name (	B�AH�
country_code (	B�AH�
target_type (	B�AH�h
status (2S.google.ads.googleads.v16.enums.GeoTargetConstantStatusEnum.GeoTargetConstantStatusB�A 
canonical_name (	B�AH�R
parent_geo_target	 (	B2�A�A,
*googleads.googleapis.com/GeoTargetConstantH�:R�AO
*googleads.googleapis.com/GeoTargetConstant!geoTargetConstants/{criterion_id}B
_idB
_nameB
_country_codeB
_target_typeB
_canonical_nameB
_parent_geo_targetB�
&com.google.ads.googleads.v16.resourcesBGeoTargetConstantProtoPZKgoogle.golang.org/genproto/googleapis/ads/googleads/v16/resources;resources�GAA�"Google.Ads.GoogleAds.V16.Resources�"Google\\Ads\\GoogleAds\\V16\\Resources�&Google::Ads::GoogleAds::V16::Resourcesbproto3
�
Cgoogle/ads/googleads/v16/services/geo_target_constant_service.proto!google.ads.googleads.v16.servicesgoogle/api/annotations.protogoogle/api/client.proto"�
 SuggestGeoTargetConstantsRequest
locale (	H�
country_code (	H�k
location_names (2Q.google.ads.googleads.v16.services.SuggestGeoTargetConstantsRequest.LocationNamesH e
geo_targets (2N.google.ads.googleads.v16.services.SuggestGeoTargetConstantsRequest.GeoTargetsH 
LocationNames
names (	*

GeoTargets
geo_target_constants (	B
queryB	
_localeB
_country_code"�
!SuggestGeoTargetConstantsResponseg
geo_target_constant_suggestions (2>.google.ads.googleads.v16.services.GeoTargetConstantSuggestion"�
GeoTargetConstantSuggestion
locale (	H �
reach (H�
search_term (	H�R
geo_target_constant (25.google.ads.googleads.v16.resources.GeoTargetConstantZ
geo_target_constant_parents (25.google.ads.googleads.v16.resources.GeoTargetConstantB	
_localeB
_reachB
_search_term2�
GeoTargetConstantService�
SuggestGeoTargetConstantsC.google.ads.googleads.v16.services.SuggestGeoTargetConstantsRequestD.google.ads.googleads.v16.services.SuggestGeoTargetConstantsResponse"*���$"/v16/geoTargetConstants:suggest:*E�Agoogleads.googleapis.com�A\'https://www.googleapis.com/auth/adwordsB�
%com.google.ads.googleads.v16.servicesBGeoTargetConstantServiceProtoPZIgoogle.golang.org/genproto/googleapis/ads/googleads/v16/services;services�GAA�!Google.Ads.GoogleAds.V16.Services�!Google\\Ads\\GoogleAds\\V16\\Services�%Google::Ads::GoogleAds::V16::Servicesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

