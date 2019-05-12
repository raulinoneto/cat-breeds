**Search Breeds**
----
  _This endpoint return an array of Breeds, you can search by a breed name or if is a experimental breed._

* **URL**

  _/breeds_

* **Method:**

  `GET`
  
*  **URL Params**

   **Required one of them:**
 
   `name=[string]`
   `experimental=[integer]`

* **Success Response:**

  * **Code:** 200 <br />
    **Content:** 
```json
{
  "data": [
    {
      "weight": {
        "imperial": "8 - 16",
        "metric": "4 - 7"
      },
      "id": "sibe",
      "name": "Siberian",
      "cfa_url": "http://cfa.org/Breeds/BreedsSthruT/Siberian.aspx",
      "vetstreet_url": "http://www.vetstreet.com/cats/siberian",
      "vcahospitals_url": "https://vcahospitals.com/know-your-pet/cat-breeds/siberian",
      "temperament": "Curious, Intelligent, Loyal, Sweet, Agile, Playful, Affectionate",
      "origin": "Russia",
      "country_codes": "RU",
      "country_code": "RU",
      "description": "The Siberians dog like temperament and affection makes the ideal lap cat and will live quite happily indoors. Very agile and powerful, the Siberian cat can easily leap and reach high places, including the tops of refrigerators and even doors. ",
      "life_span": "12 - 15",
      "indoor": 0,
      "lap": 1,
      "alt_names": "Moscow Semi-longhair, HairSiberian Forest Cat",
      "adaptability": 5,
      "affection_level": 5,
      "child_friendly": 4,
      "dog_friendly": 5,
      "energy_level": 5,
      "grooming": 2,
      "health_issues": 2,
      "intelligence": 5,
      "shedding_level": 3,
      "social_needs": 4,
      "stranger_friendly": 3,
      "vocalisation": 1,
      "experimental": 0,
      "hairless": 0,
      "natural": 1,
      "rare": 0,
      "rex": 0,
      "suppressed_tail": 0,
      "short_legs": 0,
      "wikipedia_url": "https://en.wikipedia.org/wiki/Siberian_(cat)",
      "hypoallergenic": 1
    }
  ]
}
```
 
* **Error Response:**

  * **Code:** 400 Bad Request <br />
    **Content:** `{ message : "Require name or experimental query parameter" }`

