using System;
using System.Collections.Generic;
using System.Data.SqlClient;
using MySql.Data.MySqlClient;
using System.Linq;
using System.Web;
using System.Web.Services;

namespace ServiceWebGsb
{
    /// <summary>
    /// Description résumée de WebService1
    /// </summary>
    [WebService(Namespace = "http://tempuri.org/")]
    [WebServiceBinding(ConformsTo = WsiProfiles.BasicProfile1_1)]
    [System.ComponentModel.ToolboxItem(false)]
    // Pour autoriser l'appel de ce service Web depuis un script à l'aide d'ASP.NET AJAX, supprimez les marques de commentaire de la ligne suivante. 
    // [System.Web.Script.Services.ScriptService]
    public class WebService1 : System.Web.Services.WebService
    {

        [WebMethod]
        public string HelloWorld()
        {
            return "Hello World";
        }

        [WebMethod]
        public String[] select_effets_secondaire(int unIdMedoc)
        {
            string connectionString = "server=localhost;database=GSB;user=root;password='';";

           
                using (MySqlConnection connection = new MySqlConnection(connectionString))
                {
                    connection.Open();
                    string query = "SELECT * " + "  FROM effets_secondaires JOIN entrainer_second ON effets_secondaires.id = entrainer_second.id_effet WHERE entrainer_second.id_medicament =  @idMedoc;";
                    List<String> lesEffets = new List<String>();
                    using (MySqlCommand command = new MySqlCommand(query, connection))
                    {
                        command.Parameters.AddWithValue("@idMedoc", unIdMedoc);
                        MySqlDataReader dataReader = command.ExecuteReader();
                        while (dataReader.Read())
                        {
                            String unEffet = Convert.ToInt16(dataReader["id"]) +";" +Convert.ToString(dataReader["description"]);
                            lesEffets.Add(unEffet);
                        }
                    }
                    connection.Close();
                    return lesEffets.ToArray();
                }
           
        }
        [WebMethod]
        public String[] select_effets_therapeutiques(int unIdMedoc)
        {
            string connectionString = "server=localhost;database=gsb;user=root;password='';";


            using (MySqlConnection connection = new MySqlConnection(connectionString))
            {
                connection.Open();
                string query = "SELECT * " + " FROM effets_therapeutiques JOIN entrainer_thérap ON effets_therapeutiques.id = entrainer_thérap.id_effet WHERE entrainer_thérap.id_medicament = @idMedoc;";
                List<String> lesEffets = new List<String>();
                using (MySqlCommand command = new MySqlCommand(query, connection))
                {
                    command.Parameters.AddWithValue("@idMedoc", unIdMedoc);
                    MySqlDataReader dataReader = command.ExecuteReader();
                    while (dataReader.Read())
                    {
                        String unEffet = Convert.ToInt16(dataReader["id"]) + ";" + Convert.ToString(dataReader["description"]);
                        lesEffets.Add(unEffet);
                    }
                }
                connection.Close();
                return lesEffets.ToArray();
            }

        }
        [WebMethod]
        public String[] select_medicaments()
        {
            string connectionString = "server=localhost;database=gsb;user=root;password='';";


            using (MySqlConnection connection = new MySqlConnection(connectionString))
            {
                connection.Open();
                string query = "SELECT * " + " FROM medicaments";
                List<String> lesMedicaments = new List<String>();
                using (MySqlCommand command = new MySqlCommand(query, connection))
                {
                    MySqlDataReader dataReader = command.ExecuteReader();
                    while (dataReader.Read())
                    {
                        String unMedicament = Convert.ToInt16(dataReader["id"]) + ";" + Convert.ToString(dataReader["nom"]);
                        lesMedicaments.Add(unMedicament);
                    }
                }
                connection.Close();
                return lesMedicaments.ToArray();
            }

        }
        [WebMethod]
        public String[] select_activites()
        {
            string connectionString = "server=localhost;database=gsb;user=root;password='';";


            using (MySqlConnection connection = new MySqlConnection(connectionString))
            {
                connection.Open();
                string query = "SELECT * " + " FROM medicaments";
                List<String> lesMedicaments = new List<String>();
                using (MySqlCommand command = new MySqlCommand(query, connection))
                {
                    MySqlDataReader dataReader = command.ExecuteReader();
                    while (dataReader.Read())
                    {
                        String unMedicament = Convert.ToInt16(dataReader["id"]) + ";" + Convert.ToString(dataReader["nom"]);
                        lesMedicaments.Add(unMedicament);
                    }
                }
                connection.Close();
                return lesMedicaments.ToArray();
            }

        }
        [WebMethod]
        public Boolean verifParticipant(String uneAdresse)
        {
            string connectionString = "server=localhost;database=gsb;user=root;password='';";


            using (MySqlConnection connection = new MySqlConnection(connectionString))
            {
                connection.Open();
                string query = "SELECT COUNT(*) FROM participants WHERE email = @unMail";
                using (MySqlCommand command = new MySqlCommand(query, connection))
                {
                    command.Parameters.AddWithValue("@unMail", uneAdresse);
                    int nb = Convert.ToInt16(command.ExecuteScalar());
                    if (nb == 0)
                    {
                        return false;
                    } else
                    {
                        return true;
                    }
                }
            }
        }
        [WebMethod]
        public void insert_participant(String unNom, String unPrenom, String uneAdresse, int unNum)
        {
            string connectionString = "server=localhost;database=gsb;user=root;password='';";


            using (MySqlConnection connection = new MySqlConnection(connectionString))
            {
                connection.Open();
                string query = "INSERT INTO participants (nom, prenom, email, num) VALUES (@unNom, @unPrenom, @uneAdresse, @unNum); ";
                using (MySqlCommand command = new MySqlCommand(query, connection))
                {
                    command.Parameters.AddWithValue("@unNom", unNom);
                    command.Parameters.AddWithValue("@unPrenom", unPrenom);
                    command.Parameters.AddWithValue("@uneAdresse", uneAdresse);
                    command.Parameters.AddWithValue("@unNum", unNum);
                    command.ExecuteNonQuery();
                    connection.Close();
                }
            }

        }
        [WebMethod]
        public void insert_participer(int unIdAct, int unIdPartip)
        {
            string connectionString = "server=localhost;database=gsb;user=root;password='';";


            using (MySqlConnection connection = new MySqlConnection(connectionString))
            {
                connection.Open();
                string query = "INSERT INTO participer (id_activite, id_participant) VALUES (@unIdAct, @unIdPart); ";
                using (MySqlCommand command = new MySqlCommand(query, connection))
                {
                    command.Parameters.AddWithValue("@unIdAct", unIdAct);
                    command.Parameters.AddWithValue("@unIdPart", unIdPartip);
                    command.ExecuteNonQuery();
                    connection.Close();
                }
            }

        }
    }
}












