/**
 * Created by gusjasponde on 8/29/2017.
 */

package bkndhckufrj

import org.springframework.boot.SpringApplication
import org.springframework.boot.autoconfigure.EnableAutoConfiguration
import org.springframework.context.annotation.Bean
import org.springframework.context.annotation.Configuration

@EnableAutoConfiguration
@Configuration
class BkndApplication{
    @Bean
    fun controller() = BkndController();
}

fun main(args : Array<String>){
    SpringApplication.run(BkndApplication::class.java, *args)
}