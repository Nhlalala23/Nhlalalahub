package portfolio;
import java.util.List;



public interface ContactMessRepository extends JpaRepository<ContactMess,Long> {

    List<ContactMessage> findByEmail(String email);
}