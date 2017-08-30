/**
 * Created by gusjasponde on 8/29/2017.
 */

package bkndhckufrj

import org.apache.tomcat.util.http.fileupload.RequestContext
import org.springframework.web.bind.annotation.*

@RestController
@RequestMapping ("/home")
class BkndController{
    @ResponseBody
    @RequestMapping("", method = arrayOf(RequestMethod.GET))
    fun mainPage() =
        "hello darkness my old friend"
}
