**Search Breeds**
----
  _This endpoint return an array of Breeds, you can search by a breed name or if is a experimental breed._

* **URL**

  _/breeds_

* **Method:**

  `GET`

* **Success Response:**

  * **Code:** 200 <br />
    **Content:** 
```json
{
  "data": {
    "id": 2,
    "api_id": "aslo",
    "name": "Asian Semi-longhair",
    "temperament": "Active, Curious, Gentle",
    "life_span": "12 - 15",
    "alt_names": "Tiffanie, Tiffany",
    "wikipedia_url": "https://en.wikipedia.org/wiki/Asian_Semi-longhair",
    "origin": "United Kingdom",
    "weight_imperial": "7 - 15",
    "country_code": "GB",
    "experimental": 0,
    "hairless": 0,
    "natural": 0,
    "rare": 0,
    "rex": 0,
    "suppress_tail": 0,
    "short_legs": 0,
    "hypoallergenic": 0,
    "adaptability": 4,
    "affection_level": 4,
    "child_friendly": 4,
    "dog_friendly": 4,
    "energy_level": 3,
    "grooming": 2,
    "health_issues": 1,
    "intelligence": 3,
    "shedding_level": 3,
    "social_needs": 3,
    "stranger_friendly": 3,
    "vocalisation": 5,
    "created_at": "2019-05-10 13:10:32",
    "updated_at": "2019-05-10 13:10:32"
  }
}
```
 
* **Error Response:**

  * **Code:** 503 Unavailable Service <br />
    **Content:** `{ message : "Could'nt connect with database" }`

