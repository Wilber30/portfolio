<pre id="mid_point" class="embedded_sql">
  <code id="example2" class="sql">
SELECT
  m.mov_id AS "ID",
  mov_title AS "Movie",
  r.rev_stars AS "Star Rating"
FROM
  movie AS m
  INNER JOIN (
    SELECT
      mov_id,
      rev_stars
    FROM
      rating
    WHERE
      rev_stars > 3
  ) AS r ON m.mov_id = r.mov_id
ORDER BY
  r.rev_stars ASC;
  </code> 
</pre>
