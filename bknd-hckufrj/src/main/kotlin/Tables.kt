/**
 * Created by gusjasponde on 8/29/2017.
 */

package bkndhckufrj

import org.json.JSONObject
import javax.persistence.Entity

@Entity
class Course(
        val idCourse : Int = 0,
        val name : String = ""
)

@Entity
class Person(
        val idPerson : Int = 0,
        val id_course : Int = 0,
        val name : String = "",
        val email : String = "",
        val phone : String = "",
        val role : String = "",
        val id_interests : JSONObject,
        val hours_container : JSONObject
)

@Entity
class Interest(
        val idInterest : Int = 0,
        val name : String = ""
)

@Entity
class Hours(
        val pendent : Int = 0,
        val remaining : Int = 0,
        val completed : Int = 0
)

@Entity
class Event(
        val description : String = "",
        val imagePath : String = "",
        val dt_hr : String = "",
        val qtd_hrs : Int = 0,
        val certified : Boolean,
        val id_course : Int = 0,
        val id_host : Int = 0
)
