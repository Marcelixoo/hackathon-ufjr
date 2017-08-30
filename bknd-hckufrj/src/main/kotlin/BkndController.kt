/**
 * Created by gusjasponde on 8/29/2017.
 */

package bkndhckufrj

import org.springframework.web.bind.annotation.*

@RestController
class BkndController(){
    @ResponseBody
    @GetMapping("")
    fun mainPage() = "hello darkness my old friend"
}