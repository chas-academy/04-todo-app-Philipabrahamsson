<?php

namespace Todo;

class TodoItem extends Model
{
    const TABLENAME = 'todos'; // This is used by the abstract model, don't touch

    public static function createTodo($title)
     {
         $query = "INSERT INTO todos (title, created)
         VALUES ('$title', CURRENT_TIMESTAMP)";

         self::$db->query($query);
         $result = self::$db->execute();

        return $result;
         // TODO: Implement me!
         // Create a new todo
     }

    public static function updateTodo($todoId, $title, $completed = null)
        {
            $query = "UPDATE todos
                        SET title = '$title', created = CURRENT_TIMESTAMP, completed = '$completed'
                        WHERE id = '$todoId'";
            

            self::$db->query($query);
            $result = self::$db->execute();
            
            return $result;
            
            // TODO: Implement me!
             // Update a specific todo
         }

    public static function deleteTodo($todoId)
    {
        $query = "DELETE FROM todos WHERE id = $todoId";
        //self::$db->prepare($query);
        

        self::$db->query($query);
         $result = self::$db->execute();

        if ($result) {
            return $result;
        }
    
    
        //     // TODO: Implement me!
    //     // Delete a specific todo
    }
    
    // (Optional bonus methods below)
    // public static function toggleTodos($completed)
    // {
    //     // TODO: Implement me!
    //     // This is to toggle all todos either as completed or not completed
    // }

    // public static function clearCompletedTodos()
    // {
    //     // TODO: Implement me!
    //     // This is to delete all the completed todos from the database
    // }

}
