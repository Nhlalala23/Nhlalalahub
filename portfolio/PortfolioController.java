package portfolio;

@Controller
@RequestMapping("/api/portfolio")

public class PortfolioController {
    @GetMapping("/data")
    @RequestBody

    public ResponseEntity<String> getPortfolioData(){
        String portfolioData = ""; /// fill is section

        return ResponseEntity.ok(portfolioData);
    }
}
