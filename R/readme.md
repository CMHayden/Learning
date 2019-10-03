# R

R is in many application areas the statistical software of choice and is the language within which
many cutting edge statistical techniques are first implemented. 

## Getting Started

R can be downloaded [here](https://cran.r-project.org/mirrors.html). Once R is downloaded and installed on your device, it comes with a full environment for programming R.

## Basics

### Calculations

R can be used similar to a basic calculator. We can carry out any of the standard operations +, −, ×, ÷, etc. Here are some examples of R for calculations:

```R
> 4+4
[1] 8

> (2^10-3^5)/(5*6)
[1] 26.03333
```

### Storing Data

We can store the output of operations in variables. We can also carry out calculations using these variables.

```R
> x = 3+4
> y = 2*2
> x - y
[1] 3
```

We can also store arrays of data. These can be done by specifying the numbers to store, specifying a range, sequences, repetitions... One thing to be aware of, in R the index of an array starts at 1.

```R
> x = c(3,6,5)
> y = 3:5
>  x + 2
[1] 5 8 7
> y * 3
[1]  9 12 15
> x + y
[1] 6 10 10
> x * y
[1] 9 24 25
```

**c(...)** generic function to combine arguments with the default forming a vector; with recursive=TRUE descends through lists combining all elements into one vector.

```R
> c(3, 6, 5)
[1] 3 6 5
```

**from:to** generates a sequence; “:” has operator priority;

```R
> 1:4 + 5
[1] 6 7 8 9
```

**seq(from,to)** generates a sequence by= specifies increment; length= specifies desired length

```R
> seq(from = 0, to = 4, by = 2)
[1] 0 2 4
> seq(0, 1, length.out = 11)
[1] 0.0 0.1 0.2 0.3 0.4 0.5 0.6 0.7 0.8 0.9 1.0
```

**rep(x,times)** replicate x times; use each= to repeat “each” element of x each times.

```R
> rep(c(1,2,3),each=2)
[1] 1 1 2 2 3 3
```
### Inbuilt Functions

R has a number of inbuilt mathematical functions which can be applied to either numbers directly or variables. In general if you apply these basic mathematical functions to arrays it will carry out the function on each coordinate in turn but care has to be taken as this is not always the case.

sin,cos,tan,asin,acos,atan,atan2,log,log10,exp

### Reading Data

In most situations, R is used to analyse a data set that has been obtained elsewhere. To do this, we must load the data set into R. R has a number of inbuilt functions for doing this depending on the format the data is in.

* Excel
```R
name <- read.xls('excelFile.xls')
```

* SPSS Datasets
```R
name <- read.spss('spssDataset.spss')
```

* Seperated Data
Seperated data can be either coma seperated, or space seperated. The first argument passed is the name of the file from which we will load the data. The second (sep) tells R which seperator is used. The third argument tells R if the first row of the file is variable names (TRUE) or data (FALSE).

```R
name <- read.table('name.data', sep=',', header=FALSE)
```
```R
name <- read.table('name.data', sep=' ', header=FALSE)
```

### Data Frames

Normally in R, data is written within a data frame. This is a data structure which stores all the data for our experiment as a table with each row representing an observation, and each column a variable that has been measured. Each column can be thought of as a vector, all of equal length.

### Basic Plots

Plots are used to explore a dataset. The data set must be loaded prior, or there is no data to plot.

#### Stem and Leaf Plot

Stem and leaf plots are useful for any numerical data and relatively small data sets. In the example below, abalone is a data set read in to R. We create an abalone_lengths variable where we store the first 80 entries to the abalone dataset. We finally use the *stem()* function to plot our data.

```R
abalone <- read.table('abalone.data', sep=',', header=FALSE)
abalone_lengths <- abalone$V1[1:80]
stem(abalone_lengths)
```

#### Histogram



#### Scatter Plot



#### Bar Plot



### Summary Statistics

R has built in functions to calculate summary statistics for our data.

**Mean** mean(dataset)
**Standard Deviation** sd(dataset)
**Median** median(dataset)
**Quartiles** quantile(dataset)
**Interquartile Range** IQR(dataset)

```R
mean(abalone$V5)
[1] 0.2820557

sd(abalone$V5)
[1] 0.1308332

median(abalone$V5)
[1] 0.276

quantile(abalone$V5)
0%      25%     50%     75%     100%
0.0050  0.1900  0.2760  0.3555  0.8970

IQR(abalone$V5)
[1] 0.1655
```

Often we want to obtain all this information on a set of data, in these cicumstances we can use the function *summary*. We can chose to specify a column or not:

```R
summary(abalone$V3)
Min.    1st Qu. Median  Mean    3rd Qu. Max.
0.0250  0.1300  0.1550  0.1514  0.1750  0.5150

summary(abalone)
        V1              V2              V3              V4              V5              V6
Min.    :0.1550    Min. :0.1100    Min. :0.0250    Min. :0.0155    Min. :0.0050    Min. :3.0
1st Qu. :0.5050  1st Qu.:0.3950  1st Qu.:0.1300  1st Qu.:0.6733  1st Qu.:0.1900  1st Qu.:9.0
Median  :0.5800  Median :0.4550  Median :0.1550  Median :0.9760  Median :0.2760  Median :10.0
Mean    :0.5615    Mean :0.4393    Mean :0.1514    Mean :0.9918    Mean :0.2821    Mean :10.7
3rd Qu. :0.6300  3rd Qu.:0.5000  3rd Qu.:0.1750  3rd Qu.:1.2657  3rd Qu.:0.3555  3rd Qu.:12.0
Max.    :0.7800    Max. :0.6300    Max. :0.5150    Max. :2.8255    Max. :0.8970    Max. :27.0
```