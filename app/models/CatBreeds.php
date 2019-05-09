<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
* @property integer                                  cat_breeds_id
* @property string                                   api_id
* @property string                                   name
* @property string                                   temperament
* @property string                                   life_span
* @property string                                   alt_names
* @property string                                   wikipedia_url
* @property string                                   origin
* @property string                                   weight_imperial
* @property string                                   country_code
* @property integer                                  experimental
* @property integer                                  hairless
* @property integer                                  natural
* @property integer                                  rare
* @property integer                                  rex
* @property integer                                  suppress_tail
* @property integer                                  short_legs
* @property integer                                  hypoallergenic
* @property integer                                  adaptability
* @property integer                                  affection_level
* @property integer                                  child_friendly
* @property integer                                  dog_friendly
* @property integer                                  energy_level
* @property integer                                  grooming
* @property integer                                  health_issues
* @property integer                                  intelligence
* @property integer                                  shedding_level
* @property integer                                  social_needs
* @property integer                                  stranger_friendly
* @property integer                                  vocalisation
* @property \Carbon\Carbon                           created_at
* @property \Carbon\Carbon                           update_at
*/
class CatBreeds extends Model{

}
