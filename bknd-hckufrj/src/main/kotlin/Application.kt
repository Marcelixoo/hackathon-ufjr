/**
 * Created by gusjasponde on 8/29/2017.
 */

package bkndhckufrj

import org.springframework.beans.factory.annotation.Value
import org.springframework.boot.CommandLineRunner
import org.springframework.boot.SpringApplication
import org.springframework.boot.autoconfigure.EnableAutoConfiguration
import org.springframework.boot.context.properties.EnableConfigurationProperties
import org.springframework.context.ConfigurableApplicationContext
import org.springframework.context.annotation.Bean
import org.springframework.context.annotation.Configuration
import sun.tools.jar.CommandLine

@EnableAutoConfiguration
@EnableConfigurationProperties(BkndApplication::class)
open class BkndApplication{
    @Bean
    open fun init(
            ctx : ConfigurableApplicationContext,
            @Value("\${app.appName}") appName : String
    ) = CommandLineRunner{
        println("Initializing $appName - $ctx")

        //Do init stuff here
        fun controller() = BkndController()
    }
}

fun main(args : Array<String>){
    SpringApplication.run(BkndApplication::class.java, *args)
}