package bkndhckufrj

import org.springframework.boot.context.properties.ConfigurationProperties

@ConfigurationProperties("app")
class BkndApplicationProprerties{
    var appName : String? = null
}